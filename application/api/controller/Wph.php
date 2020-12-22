<?php

namespace app\api\controller;

use app\admin\model\StoreDown;
use app\common\controller\Api;
use com\vip\wpc\ospservice\vop\WpcVopOspServiceClient;
use Osp\Context\InvocationContextFactory;
use think\Config;
use app\common\model\BrandList;
use app\common\model\GoodsList;

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
        $store_id = $this->request->param('store_id');
        //获取小店已下架品牌id
        $storeDown = new StoreDown;
        $downIdArray = $storeDown->getDownId($store_id);
        $brandListMode = new BrandList; 
        $result = collection($brandListMode::where("cateId!=''")->field('id,cateId,cateName')->select())->toArray();
        foreach ($result as $key => $val) {
            $result[$key]['cateId'] = explode(',', $val['cateId']);
            $result[$key]['cateName'] = explode(',', $val['cateName']);
        }
        $result = $this->second_array_unique_bykey($result, 'cateName');
        foreach ($result as $k => $v) {
            $result[$key]['cateId'] = $v['cateId'];
            $result[$key]['cateName'] = $v['cateName'];
            $result[$k]['count'] = $brandListMode::where('cateId', 'in', $v['cateId'])->where(function ($query) use ($downIdArray,$store_id){
                if(isset($store_id) && !empty($store_id)){
                    $query->whereNotIn('adId',$downIdArray);
                }
            })->count('id');
        }
        $this->success('请求成功！', $result);
    }

    /**
     * 返回品牌数据
     */
    public function brandListsWph($areaId = '101101', $page = 1, $pageSize = 20)
    {
        try {
            $service = WpcVopOspServiceClient::getService();
            $ctx = InvocationContextFactory::getInstance();
            $ctx->setAppKey(Config::get('wph.AppKey'));
            $ctx->setAppSecret(Config::get('wph.AppSecret'));
            $ctx->setAppURL("https://gw.vipapis.com/");
            $ctx->setLanguage("zh");
            $request1 = new \com\vip\wpc\ospservice\vop\request\WpcBrandListRequest();
            $request1->areaId = $areaId;
            $request1->timestamp = time();
            $request1->vopChannelId = Config::get('wph.AppKey');
            $request1->userNumber = Config::get('wph.userNumber');
            $request1->page = $page;
            $request1->pageSize = $pageSize;
            $list = collection($service->getBrandList($request1))->toArray();
            if ($list) {
                $this->success('请求成功！', $list);
                return $list;
            }
        } catch(\Osp\Exception\OspException $e){
            $this->error('请求失败，请联系管理员！');
        }
    }

    /**
     * 返回品牌数据
     */
    public function brandList($page = 1, $pageSize = 20, $cid = 0)
    {
        $result = '';
        $time = time();
        try {
            if ($cid == 0) {
                $result = BrandList::where('sellTimeTo','>',$time )->limit(($page - 1)*$pageSize, $pageSize)->select();
                // echo BrandList::getLastSQL();die; 
            }else{
                $result = BrandList::where('cateId', 'in', $cid)->where('sellTimeTo','>',$time )->limit(($page - 1)*$pageSize, $pageSize)->select();
            }
            return $result;
        } catch(Exception $e){
            $this->error('请求失败，请联系管理员！');
        }
    }

    /**
     * 返回品牌对应的商品的数据
     */
    public function goodsListWph($areaId = '101101', $page = 1, $pageSize = 20, $adId = '')
    {
        try {
            $service = WpcVopOspServiceClient::getService();
            $ctx = InvocationContextFactory::getInstance();
            $ctx->setAppKey(Config::get('wph.AppKey'));
            $ctx->setAppSecret(Config::get('wph.AppSecret'));
            $ctx->setAppURL("https://gw.vipapis.com/");
            $ctx->setLanguage("zh");
            $request1 = new \com\vip\wpc\ospservice\vop\request\WpcGoodsListRequest();
            $request1->areaId = $areaId;
            $request1->timestamp = time();
            $request1->vopChannelId = Config::get('wph.AppKey');
            $request1->userNumber = Config::get('wph.userNumber');
            $request1->page = $page;
            $request1->pageSize = $pageSize;
            $request1->adId = $adId;
            $list = collection($service->getGoodsList($request1))->toArray();
            if ($list) {
                // $this->success('请求成功！', $list);
                return $list;
            }
            // var_dump($service->getGoodsList($request1));
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
        $id = $this->request->request('cateid')?:0;
        $store_id = $this->request->request('store_id');
        //获取小店已下架品牌id
        $storeDown = new StoreDown;
        $downIdArray = $storeDown->getDownId($store_id);
        $result = $this->brandList($pageIndex, $pageSize, $id);
        if ($result) {
            foreach ($result as $k => $v) {
                if(in_array($v['adId'],$downIdArray)){
                    unset($result[$k]);
                    continue;
                }
                $result[$k]['endTime'] = time2string(strtotime($v['sellTimeTo']) - time());
            }
        }
        $this->success('请求成功！', $result);
    }

    /**
     * 商品列表
     */
    public function getGoodsList()
    {
        $page = $this->request->request('page')?:1;
        $pageSize = $this->request->request('pageSize')?:10;
        $id = $this->request->request('adId')?:0;
        $result = $this->goodsList($page, $pageSize, $id);
        if ($result) {
            foreach ($result as $k => $v) {
                $result[$k]['endTime'] = time2string(strtotime($v['sellTimeTo']) - time());
            }
        }
        $this->success('请求成功！', $result);
    }

    /**
     * 返回商品数据信息 
     */
    public function goodsList($page, $pageSize, $cid)
    {
        $result = $this->brandList($page, $pageSize, $cid);
        try {
            foreach ($result as $k => $v) {
                $goods = GoodsList::where('adId', $v['adId'])->field('goodImage')->limit(5)->select();
                // $goodsList = $this->goodsListWph('', $page, $pageSize, $v['adId']);
                $result[$k]['goods'] = $goods;
                $result[$k]['godosTotal'] = GoodsList::where('adId', $v['adId'])->count('id');
            }
        } catch (Exception $e) {
            $this->error('请求失败！', $e->getMesssges);
        }
        return $result;
    }

    /**
     * 返回商品详情数据
     */
    public function goodsDetailWph($areaId = '101101', $goodFullIds = '')
    {
        try {
            $service = WpcVopOspServiceClient::getService();
            $ctx = InvocationContextFactory::getInstance();
            $ctx->setAppKey(Config::get('wph.AppKey'));
            $ctx->setAppSecret(Config::get('wph.AppSecret'));
            $ctx->setAppURL("https://gw.vipapis.com/");
            $ctx->setLanguage("zh");
            $request1 = new \com\vip\wpc\ospservice\vop\request\WpcGoodsDetailRequest();
            $request1->areaId = $areaId;
            $request1->timestamp = time();
            $request1->vopChannelId = Config::get('wph.AppKey');
            $request1->userNumber = Config::get('wph.userNumber');
            $request1->goodFullIds = $goodFullIds;
            // var_dump($service->getGoodsDetail($request1));
            $list = collection($service->getGoodsDetail($request1))->toArray();
            if ($list) {
                // $this->success('请求成功！', $list);
                return $list;
            }
        } catch(\Osp\Exception\OspException $e){
            $this->error('请求失败，请联系管理员！');
        }
    }

    /** 
     * 二维数组实现去除重复项
     */
    private function second_array_unique_bykey($arr, $key)
    {
        $tmp_arr = array(); 
        foreach($arr as $k => $v)
        {
            if(in_array($v[$key], $tmp_arr))//搜索$v[$key]是否在$tmp_arr数组中存在，若存在返回true
            {
                unset($arr[$k]);
            }else {
                $tmp_arr[$k] = $v[$key];
            }
        }
        ksort($arr); //ksort函数对数组进行排序(保留原键值key) sort为不保留key值
        return $arr; 
    }

    



}
