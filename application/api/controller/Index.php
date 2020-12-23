<?php

namespace app\api\controller;

use app\common\controller\Api;
use addons\adszone\model\AdszoneAds;
use app\common\model\Address;

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
                $result = Address::create()->insert($params);
            } catch (Exception $e) {
                $this->error('请求失败！', $e->getMessage);
            }
        }
    }
}
