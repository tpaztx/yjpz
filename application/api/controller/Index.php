<?php

namespace app\api\controller;

use app\common\controller\Api;
use addons\adszone\model\AdszoneAds;
use app\common\model\Address;
use app\common\model\Config;
use app\common\model\User;
use Endroid\QrCode\QrCode;

/**
 * 首页接口
 */
class Index extends Api
{
    protected $noNeedLogin = ['*'];
    protected $noNeedRight = ['*'];

    /**
     * 首页 - 海报轮播
     */
    public function getBannnerList()
    {
        $result = AdszoneAds::create()->where('zone_id', 1)->field('id,imageurl,linkurl')->order('weigh')->select();
        $this->success('请求成功', $result);
    }

    /**
     * 新增用户收件地址
     */
    public function insertAddress()
    {
        $params = $this->request->request();
        if ($params && !empty($params))
        {
            if ($params['default'] == 1) {
                $id = Address::where(['user_id'=>$this->auth->id, 'default'=>'1'])->value('id');
                Address::where(['user_id'=>$this->auth->id, 'id'=>$id])->update(['default'=>'0']);
            }
            try {
                $data['user_id'] = $this->auth->id;
                $data['province'] = $params['province']?:'';
                $data['city'] = $params['city']?:'';
                $data['area'] = $params['area']?:'';
                $data['address'] = $params['address']?:'';
                $data['default'] = $params['default']?:'0';
                $data['name'] = $params['name']?:'';
                $data['mobile'] = $params['mobile']?:'';
                $data['is_time'] = $params['is_time']?:0;
                $data['time_log'] = time();
                $result = Address::insert($data);
                if ($result) {
                    $this->success('请求成功！');
                }
            } catch (Exception $e) {
                $this->error('请求失败！', $e->getMessage);
            }
        }
    }

    /**
     * 删除收货地址
     */
    public function delAddress()
    {
        $ids = $this->request->request('ids');
        if (!$ids) $this->error('缺少请求参数！');
        $result = Address::where('id', 'in', $ids)->delete();
        if ($result) {
            $this->success('请求成功！', $result);
        }
    }

    /**
     * 邀请海报
     */
    public function poster()
    {
        $code = User::where('id',$this->auth->id)->value('trade_code');
        $pic = Config::where('name', 'poster')->value('value');
        $result['myCode'] = $code;
        $result['image'] = $pic;
        //保存图片
        $api = 'http://www.baidu.com?trade_code='.$code;
        $url = "/qrcode_".$this->auth->id.".png";
        $pathname = APP_PATH . '../public/uploads/wxCode';
        if(!is_dir($pathname)) {
            mkdir($pathname);
        }
        $filename = $pathname . $url;
        if (!is_dir($filename)) {
            $wxCode = new QrCode($api);
            $wxCode->writeFile($filename);
        }
        $result['qrCode'] = '/uploads/wxCode'.$url;
        $this->success('请求成功！', $result);
    }
}
