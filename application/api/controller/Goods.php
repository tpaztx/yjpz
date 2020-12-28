<?php

namespace app\api\controller;

use app\admin\model\StoreDown;
use app\common\controller\Api;
use app\common\model\PriceChange;
use app\common\model\Search as SearchKeyword;
use app\common\model\GoodsList;
use app\common\model\BrandList;
use app\api\controller\Wph;
use app\common\model\ShoppingCart;
use com\vip\wpc\ospservice\vop\WpcVopOspServiceClient;
use Osp\Context\InvocationContextFactory;
use think\Config;

/**
 * 商品相关
 */
class Goods extends Api
{
 
    //如果$noNeedLogin为空表示所有接口都需要登录才能请求
    //如果$noNeedRight为空表示所有接口都需要验证权限才能请求
    //如果接口已经设置无需登录,那也就无需鉴权了
    //
    // 无需登录的接口,*表示全部
    protected $noNeedLogin = ['test', 'test1'];
    // 无需鉴权的接口,*表示全部
    protected $noNeedRight = ['*'];

    public function getGoodsSize()
    {
        $goodFullId = $this->request->request('goodFullId')?:0;
        if ($goodFullId) {
            $wph = new Wph;
            $result;
            $goods = $wph->goodsDetailWph('101101', $goodFullId);
            if ($goods && !empty($goods)) {
                foreach ($goods as $key => $value) {
                    $result = $value->sizeTableJson;
                }
                $this->success('请求成功！', $result);
            }else{
                $this->error('查询商品信息异常！');
            }
        }else{
            $this->error('缺少请求参数商品ID！');
        }
    }

    /**
     * 品牌详情
     * adId 广告ID
     */
    public function getBrandInfo()
    {
        $page = $this->request->request('page')?:1;
        $pageSize = $this->request->request('pageSize')?:10;
        $adId = $this->request->request('adId')?:0;
        if ($adId == 0) $this->error('缺少请求参数商品ID！');

        $brand_result = BrandList::where('adId', 'in', $adId)
                                    ->field('adId,brandName,brandImage,sellTimeTo,cateId,brandDesc')
                                    ->select();
        if ($brand_result && !empty($brand_result)) {
            foreach ($brand_result as $key => $val)
            {
                $brand_result[$key]['endTime'] = time2string(strtotime($val['sellTimeTo']) - time());
                $goods = GoodsList::where('adId', $val['adId'])->field('goodImage,goodId,goodFullId,goodName,sn,isMp,color,material,goodBigImage,sizes_json')->limit(($page - 1)*$pageSize, $pageSize)->select();
                foreach ($goods as $k => $v) {
                    $goods[$k]['isFavorites'] = \app\common\model\Favorites::where(['user_id'=>$this->auth->id, 'goodId'=>$v->goodId])->find()?true:false;
                    $goods[$k]['goodBigImage'] = unserialize($v->goodBigImage);
                }
                $brand_result[$key]['goods'] = $goods;
            }
            $this->success('请求成功！', $brand_result);
        }
        $this->error('请求失败！');
    }

    /**
     * 商品详情
     */
    public function goodShow()
    {
        $goodId  = $this->request->param('goodId');
        $user = $this->auth->getUser();
        $storeM = new \app\admin\model\Store();
        $store=$storeM->getStore($user['id']);
        $good = GoodsList::with(['brand'=>function($query){
            $query->field('adId,brandName,sellTimeTo,brandImage');
        }])->where('goodId',$goodId)->find();
        $changePrice = new PriceChange();
        $good = $changePrice->changePrice($store['id'],$good);
        $good['goodBigImage'] = unserialize($good['goodBigImage']);
        $good['brand']['sellTimeTo'] = strtotime($good['brand']['sellTimeTo']);
        if($good['brand']['sellTimeTo'] > time()){
            $good['brand']['sellTimeTo'] = ceil(($good['brand']['sellTimeTo']-time())/86400);
        }else{
            $good['brand']['sellTimeTo'] = '已超过选购时间！';
        }
        if(!$good){
            $this->error('服务器繁忙！');
        }
        $this->success('请求成功！',$good);
    }
    /**
     * 商品分类
     */
    public function goodCate()
    {
        $adId = $this->request->param('adId');
        $store_id = $this->request->param('store_id');
        $storeDownM = new StoreDown();
        $downArray = $storeDownM->getDownId($store_id);
        $catNameOneArray = GoodsList::where(function ($query) use ($adId,$downArray){
            if($adId){
                $query->where('adId',$adId);
            }
            $query->whereNotIn('adId',$downArray);
        })
            ->field('id,adId,catNameOne')
            ->group('catNameOne')
            ->select();
        foreach ($catNameOneArray as $item){
            $item['children'] = GoodsList::where(function($query) use($adId,$downArray,$item){
                if($adId){
                    $query->where('adId',$adId);
                }
                $query->whereNotIn('adId',$downArray);
                $query->where('catNameOne',$item['catNameOne']);
            })
                ->field('id,adId,catNameOne,catNameTwo')
                ->group('catNameTwo')
                ->select();
        }
        if(!$catNameOneArray){
            $this->error('服务器繁忙！');
        }
        $this->success('请求成功！',$catNameOneArray);
    }

    /**
     * 图文详情
     */
    public function getGoodsDesc()
    {
        $goodFullId = $this->request->request('goodFullId')?:0;
        if ($goodFullId==0) $this->error('缺少请求参数商品ID！');

        $wph = new Wph;
        $result;
        $list = $wph->goodsDetailWph('101101', $goodFullId);
        if ($list) {
            foreach ($list as $key => $val) {
                $result = $val->dcImageURLs;
            }
            $this->success('请求成功！', $result);
        }
    }

    /**
     * 进货页展示数据
     */
    public function purchase()
    {
        $goodFullId = $this->request->request('goodFullId')?:0;
        if ($goodFullId==0) $this->error('缺少请求参数商品ID！');

        $wph = new Wph;
        $result;
        $list = $wph->goodsDetailWph('101101', $goodFullId);
        if ($list) {
            foreach ($list as $key => $val) {
                $result['goodName'] = $val->goodName?:'';
                $result['color'] = $val->color?:'';
                $result['material'] = $val->material?:'';
                $result['goodImage'] = $val->goodImage?:'';
                foreach ($val->sizes as $k => $v) {
                    $result['sizes'][$k] = [
                        'sizeName' => $v->sizeName,
                        'vipshopPrice' => (float)$v->vipshopPrice + (float)$v->suggestAddPrice
                    ];
                }
            }
            $this->success('请求成功！', $result);     
        }
    }

    /**
     * 添加收藏商品
     */
    public function insertFavorites()
    {
        $goodId = $this->request->request('goodId')?:0;
        if ($goodId == 0) {
            $this->error('请填写商品ID！');
        }
        $data['user_id'] = $this->auth->id;
        $data['goodId'] = $goodId;
        $data['time_log'] = time();
        $result = \app\common\model\Favorites::create()->insert($data);
        if ($result) {
            $this->success('请求成功！');
        }
    }

    /**
     * 删除收藏商品
     */
    public function delFavorites()
    {
        $ids = $this->request->request('ids')?:'';
        if (empty($ids)) {
            $this->error('缺少请求参数商品ID！');
        }
        $result = \app\common\model\Favorites::where('user_id', $this->auth->id)->where('goodId', 'in', $ids)->delete();
        if ($result) {
            $this->success('请求成功！');
        }
    }
    /**
     * 添加购物车
     */
    public function addCart()
    {
        $user = $this->auth->getUser();
        $param = $this->request->param();
        $validate=$this->validate($param,[
            'goodId'=>'require',
            'sizeId'=>'require',
            'store_id'=>'require',
            'num'=>'require',
            'type'=>'require',
        ],[
            'goodId.require'=>'请选择商品',
            'sizeId.require'=>'请选择商品规格',
            'store_id.require'=>'不存在的小店',
            'num.require'=>'请选择数量',
            'type.require'=>'缺少参数',
        ]);
        if($validate !== true){
            $this->error($validate);
        }
        $row = ShoppingCart::where([
            'user_id'=>$user['id'],
            'goodId'=>$param['goodId'],
            'sizeId'=>$param['sizeId'],
            'store_id'=>$param['store_id'],
        ])->find();
        if($row){
            if($param['type'] == '+'){
                $row->num +=$param['num'];
                $res = $row->save();
            }else{
                $row->num -=$param['num'];
                $res= $row->save();
            }
            if(!$res){
                $this->error('操作失败');
            }
            $this->success('操作成功！');
        }
        $param['user_id'] = $user['id'];
        unset($param['type']);
        $res=ShoppingCart::create($param);
        if(!$res){
            $this->error('操作失败');
        }
        $this->success('操作成功！');
    }
    /**
     * 购物车列表
     */
    public function shoppingCart()
    {
        $store_id = $this->request->param('store_id');
        $user = $this->auth->getUser();
        $rows = ShoppingCart::with('goods')->where([
            'user_id'=>$user['id'],
            'store_id'=>$store_id,
        ])->select();
        if(!empty($rows)){
            foreach ($rows as &$row){
                foreach ($row['goods']['sizes_json'] as $item ){
                    if($row['sizeId'] == $item['sizeId']){
                        $row['goods']['size'] = $item;
                    }
                    unset($row['goods']['sizes_json']);
                }
            }
        }
        if(empty($rows)){
            $this->error('购物车无数据！');
        }
        if(!$rows){
            $this->error('服务器繁忙！');
        }
        $this->success('请求成功！',$rows);
    }
    
}
