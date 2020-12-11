<?php

namespace app\api\controller;

use app\common\controller\Api;
use com\vip\wpc\ospservice\vop\WpcVopOspServiceClient;
use Osp\Context\InvocationContextFactory;
use think\Config;

/**
 * 唯品会类目
 */
class Wph extends Api
{
    //如果$noNeedLogin为空表示所有接口都需要登录才能请求
    //如果$noNeedRight为空表示所有接口都需要验证权限才能请求
    //如果接口已经设置无需登录,那也就无需鉴权了
    //
    // 无需登录的接口,*表示全部
    protected $noNeedLogin = ['*'];
    // 无需鉴权的接口,*表示全部
    protected $noNeedRight = ['*'];
    
    /**
     * 获取品牌类目
     */
    public function getCateGroyList()
    {
        $areaId = $this->request->request('areaId')?:'';
        //先获取数据总页数
        $pageIndex = $page_total = true;
        $page_total = $this->brandList();
        $data = [];
        if ($page_total) {
            $pageTotal = $page_total['pageTotal'];
        }
        //页数大于1的情况下循环请求获取数据
        if ($pageTotal && $pageTotal > 1) {
            $pageIndex = 1;
            do {
                try {
                    $list = $this->brandList($areaId, $pageIndex, 20);
                    $pageIndex = $list['pageIndex']?:1;
                    if ($list)
                    {
                        $brandList = object_to_array($list['brandList']);
                        foreach ($brandList as $k => $v) {
                            if (!empty($v['adCategoryList'])) {
                                foreach ($v['adCategoryList'] as $key => $val) {
                                    $data[] = [
                                        'name' => $val['cateName'],
                                        'cateid' => $val['cateId'],
                                        'total' => count($v['goods']),
                                    ];
                                }
                            }
                        }
                    }
                } catch(\Osp\Exception\OspException $e){
                    $this->error('请求失败，请联系管理员！');
                }
                $pageIndex++;
            } while ($pageIndex <= $pageTotal);
            $data = $this->second_array_unique_bykey($data, 'name');
        }
        $this->success('请求成功！', $data);
    }

    /**
     *
     */
    public function brandList($areaId = '101101', $page = 1, $pageSize = 20)
    {
        try {
            $service = WpcVopOspServiceClient::getService();
            $ctx = InvocationContextFactory::getInstance();
            $ctx->setAppKey(Config::get('wph.AppKey'));
            $ctx->setAppSecret(Config::get('wph.AppSecret'));
            $ctx->setAppURL("https://gw.vipapis.com/");
            $ctx->setLanguage("zh");
            $request1= new \com\vip\wpc\ospservice\vop\request\WpcBrandListRequest();
            $request1->areaId = $areaId;
            $request1->timestamp = time();
            $request1->vopChannelId = Config::get('wph.AppKey');
            $request1->userNumber = Config::get('wph.userNumber');
            $request1->page = $page;
            $request1->pageSize = $pageSize;
            $list = collection($service->getBrandList($request1))->toArray();
            if ($list) {
                // $this->success('请求成功！', $list);
                return $list;
            }
        } catch(\Osp\Exception\OspException $e){
            $this->error('请求失败，请联系管理员！');
        }
    }

    /**
     * 获取用户定位
     */
    public function getSelectAddress()
    {
        try {
            $service=\com\vip\wpc\ospservice\vop\WpcVopOspServiceClient::getService();
            $ctx=\Osp\Context\InvocationContextFactory::getInstance();
            $ctx->setAppKey(Config::get('wph.AppKey'));
            $ctx->setAppSecret(Config::get('wph.AppSecret'));
            $ctx->setAppURL("https://gw.vipapis.com/");
            $ctx->setLanguage("zh");
            $request1=new \com\vip\wpc\ospservice\vop\request\WpcAddressSelectRequest();
            // $request1->areaId="areaId";
            $request1->timestamp= time();
            $request1->vopChannelId=Config::get('wph.AppKey');
            $request1->userNumber=Config::get('wph.userNumber');
            // $request1->areaCode="areaCode";
            $this->success('请求成功', $service->selectAddress($request1));
        } catch(\Osp\Exception\OspException $e){
            // var_dump($e);
            $this->error('请求失败，请联系管理员！');
        }
    }

    /**
     * 品牌列表
     */
    public function getBrandList()
    {
        $pageIndex = $this->request->request('pageIndex')?:1;
        $pageSize = $this->request->request('pageSize')?:10;
        $result = $this->brandList('101101', $pageIndex, $pageSize);
        if ($result) {
            $data['pageIndex'] = $result['pageIndex'];
            $data['pageSize'] = $result['pageSize'];
            $data['pageTotal'] = $result['pageTotal'];
            $data['totalNum'] = $result['totalNum'];
            $brandList = object_to_array($result['brandList']);
            foreach ($brandList as $k => $v) {
                $obj[]['adId'] = $v['adId'];
                $obj[]['brandName'] = $v['brandName'];
                $obj[]['brandImage'] = $v['brandImage'];
                $obj[]['endTime'] = $
            }
        }
        $this->success('请求成功！', $result);
    }

    /**
     * 二维数组实现去除重复项
     */
    private function second_array_unique_bykey($arr, $key)
    {
        $tmp_arr = array();
        foreach($arr as $k => $v)
        {
            if(in_array($v[$key], $tmp_arr))  //搜索$v[$key]是否在$tmp_arr数组中存在，若存在返回true
            {
                unset($arr[$k]); //销毁一个变量 如果$tmp_arr中已存在相同的值就删除该值
            }else {
                $tmp_arr[$k] = $v[$key]; //将不同的值放在该数组中保存
            }
        }
        ksort($arr); //ksort函数对数组进行排序(保留原键值key) sort为不保留key值
        return $arr;
    }

    /**
     * 时间倒计时
     */
    function time2string($second){
        $day = floor($second/(3600*24));
        $second = $second%(3600*24);//除去整天之后剩余的时间
        $hour = floor($second/3600);
        $second = $second%3600;//除去整小时之后剩余的时间 
        $minute = floor($second/60);
        $second = $second%60;//除去整分钟之后剩余的时间 
        //返回字符串
        // return $day.'天'.$hour.'小时'.$minute.'分'.$second.'秒';
        return $day.'天';
    }



}
