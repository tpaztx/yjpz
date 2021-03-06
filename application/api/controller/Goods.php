<?php

namespace app\api\controller;

use app\admin\model\StoreDown;
use app\common\controller\Api;
use app\common\model\PriceChange;
use app\common\model\Search as SearchKeyword;
use app\common\model\GoodsList;
use app\common\model\BrandList;
use app\common\model\UserGroup;
use app\api\controller\Wph;
use app\common\model\ShoppingCart;
use com\vip\wpc\ospservice\vop\WpcVopOspServiceClient;
use Osp\Context\InvocationContextFactory;
use think\Config;
use think\Db;
use function Complex\rho;
use app\common\model\ShoppingCarts;
use think\Cache;

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
        $price = $this->request->request('price');
        $total = $this->request->request('total');
        $adId = $this->request->request('adId')?:0;
        if ($adId == 0) $this->error('缺少请求参数商品ID！');
        $price_min = $this->request->request('price_min');
        $price_max = $this->request->request('price_max');
        $catNameOne = $this->request->request('catNameOne');
        $catNameTwo = $this->request->request('catNameTwo');
        $keyword = $this->request->request('keyword');
        
        $where = "1=1";
        if ($price_min && $price_max) {
            $where .= " and suggestPrice between ".$price_min." and ".$price_max;
        }
        if ($catNameOne) {
            $test = explode(",", $catNameOne);
            foreach ($test as $value) {
                $where .= " or catNameOne='".$value."'";
            }
        }
        if ($catNameTwo) {
            $test = explode(",", $catNameTwo);
            foreach ($test as $value) {
                $where .= " or catNameTwo='".$value."'";
            }
        }
        if ($keyword) {
            $where .= " and goodName like '%".$keyword."%'";
        }
        $order = '';
        if (isset($total)) {
            $order = 'total '. ($total==1 ? 'DESC' : 'ASC');
        }
        if (isset($price)) {
            $order = 'suggestPrice '. ($price==1 ? 'DESC' : 'ASC');
        }
        $brand_result = BrandList::where('adId', 'in', $adId)
                                    ->field('adId,brandName,brandImage,sellTimeTo,cateId,brandDesc')
                                    ->select();
        if ($brand_result && !empty($brand_result)) {
            foreach ($brand_result as $key => $val)
            {
                $where .= " and adId=".$val['adId'];
                $brand_result[$key]['endTime'] = time2day(strtotime($val->sellTimeTo) - time());
                $goods = GoodsList::where($where)->field('goodImage,goodId,goodFullId,goodName,sn,isMp,color,material,goodBigImage,vipshopPrice,marketPrice,commission,suggestAddPrice,suggestPrice,sizes_json')->order($order)->limit(($page - 1)*$pageSize, $pageSize)->select();
                foreach ($goods as $k => $v) {
                    $goods[$k]['isFavorites'] = \app\common\model\Favorites::where(['user_id'=>$this->auth->id, 'goodId'=>$v->goodId])->find()?true:false;
                    $goods[$k]['goodBigImage'] = unserialize($v->goodBigImage);
                    if ($v->isMp == '1') {
                        $goods[$k]['suggestAddPrice'] = round($v->suggestAddPrice * (UserGroup::where('id', $this->auth->group_id)->value('proportion')) * 0.01, 2);
                        $goods[$k]['suggestPrice'] = $v->suggestPrice + $goods[$k]['suggestAddPrice'];
                    }else{
                        $goods[$k]['commission'] = round($v->commission * (UserGroup::where('id', $this->auth->group_id)->value('proportion')) * 0.01, 2);
                        $goods[$k]['suggestPrice'] = $v->suggestPrice + $goods[$k]['commission'];
                    }
                    $goods[$k]['total'] = \app\common\model\OrderGood::where('goodId', $v->goodId)->count('id');
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
        })
            ->field('id,adId,catNameOne')
            ->group('catNameOne')
            ->select();
        foreach ($catNameOneArray as &$item){
            $item['is_select'] = 0;
            $item['children'] = GoodsList::where(function($query) use($adId,$downArray,$item){
                if($adId){
                    $query->where('adId',$adId);
                }
                $query->where('catNameOne',$item['catNameOne']);
            })
                ->field('id,adId,catNameOne,catNameTwo')
                ->group('catNameTwo')
                ->select();
            if(!empty($item['children'])){
                $array = $item['children'];
                foreach ($array as $child){
                    $child['is_select'] = 0;
                }
                $item['children'] = $array;
            }
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
                $result['goodId'] = $val->goodId?:'';
                foreach ($val->sizes as $k => $v) {
                    $result['sizes'][$k] = [
                        'sizeName' => $v->sizeName,
                        'sizeId' => (string)$v->sizeId,
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
        $result = \app\common\model\Favorites::insert($data);
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
     * 收藏列表
     */
    public function getFavorites()
    {
        $goods =[];
        $goods = \app\common\model\Favorites::alias('f')->join('goods_list g', 'f.goodId=g.goodId')->where('f.user_id', $this->auth->id)
                                                        ->field('g.goodId,g.goodImage,g.goodName,g.color,g.material,g.isMp,g.commission,g.suggestAddPrice,g.suggestPrice')
                                                        ->select();
        if ($goods) {
            foreach ($goods as $k => $v) {
                $goods[$k]['goodImage'] = str_replace(".jpg", "_180x180.jpg", $v->goodImage);
                if ($v->isMp == '1') {
                    $goods[$k]['suggestAddPrice'] = round($v->suggestAddPrice * (UserGroup::where('id', $this->auth->group_id)->value('proportion')) * 0.01, 2);
                    $goods[$k]['suggestPrice'] = $v->suggestPrice + $goods[$k]['suggestAddPrice'];
                }else{
                    $goods[$k]['commission'] = round($v->commission * (UserGroup::where('id', $this->auth->group_id)->value('proportion')) * 0.01, 2);
                    $goods[$k]['suggestPrice'] = $v->suggestPrice + $goods[$k]['commission'];
                }
            }
        }
        $this->success('请求成功！', $goods);
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
                if(!empty($row['goods']['sizes_json'])){
                    foreach ($row['goods']['sizes_json'] as $item ){
                        if($row['sizeId'] == $item['sizeId']){
                            $row['goods']['size'] = $item;
                        }
                        unset($row['goods']['sizes_json']);
                    }
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

    /**
     * 删除购物车商品
     */
    public function delShoppingCart()
    {
        $cartIds = $this->request->param('cartIds');
        $ids = explode(',',$cartIds);
        if(!empty($ids)){
            // 启动事务
            Db::startTrans();
            try{
                foreach ($ids as $id){
                    ShoppingCart::destroy($id);
                }
                // 提交事务
                Db::commit();
                $res = true;
            } catch (\Exception $e) {
                // 回滚事务
                Db::rollback();
                $res = false;
            }
            if($res){
                $this->success('删除成功！');
            }
            $this->error($e->getMessage());
        }
    }

    /**
     * app添加进货单
     */
    public function addShopcart()
    {
        $param = $this->request->param();
        $goodFullId = $param['goodFullId'];
        $adId = $param['adId'];
        if (!$goodFullId) {
            $this->error('缺少请求参数商品ID！');
        }
        $sizes = $param['sizes'];
        if (!$sizes || empty($sizes)) {
            $this->error('缺少请求参数商品信息！');
        }
        //查询是否存在数据
        $rew = ShoppingCarts::where(['goodFullId'=>$goodFullId, 'user_id'=>$this->auth->id])->find();
        if ($rew) {

            $rew->sizes = serialize($sizes);
            $rew->endtime = 0;
            $result = $rew->save();
        }else{
            $data['sizes'] = serialize($sizes);
            $data['user_id'] = $this->auth->id;
            $data['goodFullId'] = $goodFullId;
            $data['adId'] = $adId;
            $data['goodName'] = $param['goodName']?:'';
            $data['color'] = $param['color']?:'';
            $data['material'] = $param['material']?:'';
            $data['goodImage'] = $param['goodImage']?:'';
            $data['createtime'] = time();
            $data['goodId'] = $param['goodId'];
            $result = ShoppingCarts::insert($data);
        }
        
        if(!$result){
            $this->error('操作失败');
        }else{
            //创建购物车倒计时
            $this->countDown();
            $this->success('操作成功！');
        }
    }

    /**
     * 购物车倒计时
     */
    public function countDown()
    {
        if (!Cache::get('cd_'.$this->auth->id)) {
            $result = Cache::set('cd_'.$this->auth->id, time(), 1200);
        }
    }

    /**
     * 获取购物车倒计时时差
     */
    public function getCountDown()
    {
        $rew = Cache::get('cd_'.$this->auth->id)?:'';
        if ($rew) {
            $count = time() - $rew;
            if ($count >= 1200) {
                //失效购物车数据
                ShoppingCarts::where('user_id', $this->auth->id)->update(['endtime' => time()]);
            }
            $this->success('请求成功！', ['cd_'.$this->auth->id => time2string( 1200 - $count)]);
        }else{
            $goods = ShoppingCarts::where('user_id', $this->auth->id)->where('endtime is null or endtime=0')->select();
            if ($goods) {
                foreach ($goods as $key => $val) {
                    ShoppingCarts::where('id', $val->id)->update(['endtime'=>time()]);
                }
            }
        }
        $this->success('请求成功！', ['cd_'.$this->auth->id =>'']);
    }

    /**
     * 删除进货单中商品
     */
    public function delShopcart()
    {
        $ids = $this->request->request('ids');
        if (!$ids) {
            $this->error('缺少请求参数商品ID！');
        }
        // 启动事务
        Db::startTrans();
        try{
            ShoppingCarts::where('goodFullId', 'in', $ids)->delete();
            // 提交事务
            Db::commit();
            $res = true;
        } catch (\Exception $e) {
            // 回滚事务
            Db::rollback();
            $res = false;
        }
        if($res){
            $this->success('删除成功！');
        }
        $this->error($e->getMessage());
    }

    /**
     * 获取进货单列表
     */
    public function getShopcart()
    {
        //获取进货单的品牌
        $brands = ShoppingCarts::where('user_id', $this->auth->id)->field('adId')->group('adId')->select();
        $result = [];
        if ($brands) {
            foreach ($brands as $k => $v) {
                //查询对应商品list
                $result[$k]['brandName'] = BrandList::where('adId', $v->adId)->value('brandName');
                $goods = ShoppingCarts::where(['adId'=>$v->adId])->where('endtime is null or endtime=0')->select();
                if ($goods) {
                    foreach ($goods as $key => $val) {
                        $val->sizes = unserialize($val->sizes);
                    }
                }
                $result[$k]['goods'] = $goods;
                //过期商品
                $over = ShoppingCarts::where(['adId'=>$v->adId])->where('endtime>0')->order('endtime desc')->select();
                if ($over) {
                    foreach ($over as $key => $val) {
                        $val->sizes = unserialize($val->sizes);
                    }
                }
                $result[$k]['over'] = $over;
            }   
        }
        $this->success('请求成功！', $result);
    }

}
