<?php


namespace app\api\controller;


use app\admin\model\StoreDown;
use app\common\controller\Api;
use app\admin\model\Store as StoreM;
use app\common\model\BrandList;
use app\common\model\GoodsList;
use app\common\model\PriceChange;
use think\Db;

class Store extends Api
{
    protected $noNeedLogin = '';
    protected $noNeedRight = '*';
    //小店接口

    //小店信息设置
    public function storeSet()
    {
        $user = $this->auth->getUser();
        $param = $this->request->param();
        $validate=$this->validate($param,[
            'store_name'=>'require',
            'store_desc'=>'require',
            'store_logo'=>'require',
            'store_qr_code'=>'require',
        ],[
            'store_name.require'=>'请填写小店名称',
            'store_desc.require'=>'请填写小店描述',
            'store_logo.require'=>'请上传小店logo',
            'store_qr_code.require'=>'请上传小店二维码',
        ]);
        if($validate !== true){
            $this->error($validate);
        }
        $res = StoreM::where('user_id',$user['id'])->update($param);
        if(!$res){
            $this->error('保存失败！');
        }
        $this->success('保存成功！');
    }
    /**
     * 获取小店信息
     */
    public function storeMessage()
    {
        $store_id = $this->request->param('store_id') ?? null;
        if(!empty($store_id)){
            $store = StoreM::where('id',$store_id)->find();
        }else{
            $user = $this->auth->getUser();
            $store = StoreM::where('user_id',$user['id'])->find();
        }
        if(!$store){
            $this->error('服务器繁忙！');
        }
        $this->success('请求成功！',$store);
    }


    /**
     * 已上架品牌
     */
    public function upBrand()
    {
        $limit = $this->request->request('limit')?:10;
        $user = $this->auth->getUser();
        $storeM = new StoreM;
        $store= $storeM->getStore($user['id']);
        //获取小店已下架品牌id
        $storeDown = new StoreDown;
        $downIdArray=$storeDown->getDownId($store['id']);
        $time = date('Y-m-d H:i:s',time());
        $list = BrandList::where('sellTimeTo','>',$time)
            ->whereNotIn('adId',$downIdArray)
            ->paginate($limit,false,[ 'query' => request()->param()]);
        if(!empty($list)){
            foreach ($list as $k=>&$item){
                $item['goods'] = GoodsList::where('adId',$item['adId'])->find();
                $item['sellTimeTo'] = strtotime($item['sellTimeTo']);
                if($item['sellTimeTo'] > time()){
                    $item['sellTimeTo'] = ceil(($item['sellTimeTo']-time())/86400);
                }
            }
            $this->success('请求成功！',$list);
        }

        $this->error('无数据！');
    }
    /**
     * 已下架品牌
     */
    public function downBrand()
    {
        $limit = $this->request->request('limit')?:10;
        $user = $this->auth->getUser();
        $storeM = new StoreM;
        $store= $storeM->getStore($user['id']);
        //获取小店已下架品牌id
        $storeDown = new StoreDown;
        $downIdArray = $storeDown->getDownId($store['id']);
        $time = date('Y-m-d H:i:s',time());
        $list = BrandList::where('sellTimeTo','>',$time)
            ->whereIn('adId',$downIdArray)
            ->paginate($limit,false,[ 'query' => request()->param()]);
        if(!empty($list)){
            foreach ($list as $k=>&$item){
                $item['goods'] = GoodsList::where('adId',$item['adId'])->find();
                $item['sellTimeTo'] = strtotime($item['sellTimeTo']);
                if($item['sellTimeTo'] > time()){
                    $item['sellTimeTo'] = ceil(($item['sellTimeTo']-time())/86400);
                }
            }
            $this->success('请求成功！',$list);
        }
        $this->error('无数据！');
    }
    /**
     * 上下架商品
     */
    public function storeDown()
    {
        $adIds = $this->request->param('adIds');
        $adIds=explode(',',$adIds);
        $status = $this->request->param('status');
        $user = $this->auth->getUser();
        $storeM = new StoreM;
        $store= $storeM->getStore($user['id']);

            // 启动事务
            Db::startTrans();
            try{
                foreach ($adIds as $adId){
                    if($status == 1){
                        StoreDown::where(['store_id'=>$store['id'],'ad_id'=>$adId])->delete();
                    }else if($status == 2){
                        StoreDown::create(['store_id'=>$store['id'],'ad_id'=>$adId]);
                    }
                }
                // 提交事务
                Db::commit();
                $res = true;
            } catch (\Exception $e) {
                // 回滚事务
                Db::rollback();
                $res = false;
            }
            if(!$res){
                $this->error('操作失败！');
            }
            $this->success('操作成功！');
    }
    /**
     * 转发（整场）
     * @param $status 1普通模式 2小店模式
     * @param $adId 品牌id
     */
    public function forward()
    {
        $user = $this->auth->getUser();
        $storeM = new \app\admin\model\Store();
        $store = $storeM->getStore($user['id']);
        $status = $this->request->param('status');
        $adId = $this->request->param('adId');
        if ($status == 1) {
            $data['qrcode'] = $this->qrcode('pages/index/index?store_id=' . $store['id']);
        }
        if ($status == 2) {
            $data['qrcode'] = $this->qrcode('pages/index/Sonpages/PinpaiDetail?store_id=' . $store['id'] . '&adId=' . $adId);
        }
        $data['goods'] = GoodsList::where('adId', $adId)->limit('0', '10')->order('id', 'asc')->select();
        $data['sellTimeFrom'] = BrandList::where('adId', $adId)->value('sellTimeFrom');
        if (empty($data)) {
            $this->error('获取失败！');
        }
        $this->success('获取成功！', $data);
    }
    /**
     * 改价设置
     * @param $type 1统一改价 2品牌改价 3商品改价
     * @param  $symbol +增加指定价格  -打折   *增加指定百分比
     * @param  $object_id 所属对象id 品牌id、商品id
     * @param  $number 改价数值
     */
    public function PriceChange()
    {
        $user = $this->auth->getUser();
        $storeM = new \app\admin\model\Store();
        $store = $storeM->getStore($user['id']);
        $symbol = $this->request->param('symbol');
        $number = $this->request->param('number');
        $type = $this->request->param('type');
        $object_id = $this->request->param('object_id') ?? 0;
        $data = [
            'store_id'=>$store['id'],
            'symbol'=>$symbol,
            'number'=>$number,
            'type'=>$type,
            'object_id'=>$object_id,
        ];
        if($type == 1 || $type == 2) {
            $row = PriceChange::where(['store_id' => $store['id'], 'type' => $type, 'object_id' => $object_id])->find();
            if (!$row) {
                $res = PriceChange::create($data);
            } else {
                $row->symbol = $symbol;
                $row->number = $number;
                $res=$row->save();
            }
        }
        if($type == 3){
            $array = explode(',',$object_id);
            // 启动事务
            Db::startTrans();
            try{
                foreach ($array as $item){
                    $row = PriceChange::where(['store_id' => $store['id'], 'type' => $type, 'object_id' => $item])->find();
                    if (!$row) {
                        $data['object_id'] = $item;
                        PriceChange::create($data);
                    } else {
                        $row->symbol = $symbol;
                        $row->number = $number;
                        $row->save();
                    }
                }
                // 提交事务
                Db::commit();
                $res = true;
            } catch (\Exception $e) {
                // 回滚事务
                Db::rollback();
                $res = false;
            }
        }
        if(!$res){
            $this->error('改价失败！请稍后再试！');
        }
        $this->success('改价成功！');
    }
    /**
     * 获取默认改价
     */
    public function getPriceChange()
    {
        $user = $this->auth->getUser();
        $storeM = new \app\admin\model\Store();
        $store = $storeM->getStore($user['id']);
        $change = PriceChange::where('store_id',$store['id'])
        ->where(['type'=>1,'object'=>0])
        ->find();
        if(!$change){
            $this->error('无默认改价');
        }
        $this->success('请求成功！',$change);
    }
    /**
     * H5小店模式 (品牌商品)
     */
    public function smallStoreBrandShow()
    {
        $limit = $this->request->param('limit') ?? 10;
        $store_id = $this->request->param('store_id');
        $orderFiled = $this->request->param('orderFiled') ?? 'goodId';
        $orderRule = $this->request->param('orderRule') ?? 'asc';
        $catNameOne = $this->request->param('catNameOne');
        $catNameTwo = $this->request->param('catNameTwo');
        $minPrice = $this->request->param('minPrice');
        $maxPrice = $this->request->param('maxPrice');
        $adId = $this->request->param('adId');
        $search = $this->request->param('search');
        //验证该品牌是否下架
        $check = StoreDown::where('store_id',$store_id)->whereIn('ad_id',$adId)->find();
        if($check){
            $this->error('该品牌已下架！');
        }
        //结束天数
        $time = BrandList::where('adId',$adId)->value('sellTimeTo');
        $data['time'] = ceil((strtotime($time)-time())/86400);
        //获取对该品牌下的商品并进行改价
        $data['list'] = GoodsList::where('adId',$adId)
            ->where(function ($query) use ($catNameOne,$catNameTwo,$minPrice,$maxPrice,$search){
                if($catNameOne && $catNameTwo){
                    $query->where('catNameOne',$catNameOne);
                    $query->where('catNameTwo',$catNameTwo);
                }
                if($minPrice){
                    $query->where('suggestPrice','>',$minPrice);
                }
                if($maxPrice){
                    $query->where('suggestPrice','<',$maxPrice);
                }
                if($search && !empty($search)){
                    $query->where('goodName','like','%'.$search.'%');
                }
            })
            ->order($orderFiled,$orderRule)
            ->paginate($limit,false,[ 'query' => request()->param()]);
        if(!$data){
            $this->error('服务器繁忙！');
        }
        $this->success('请求成功！',$data);
    }
    /**
     * 分享店铺
     */
    public function shareStore()
    {
        $storeId = $this->request->param('storeId');
        $url = 'www.baidu.com?store_id='.$storeId;
        $data['qrcode'] = $this->qrcode($url);
        if($data){
            $this->success('请求成功！',$data);
        }
        $this->error('服务器繁忙！',$data);
    }
    /**
     * app小店收益统计
     */
    public function getMyStroeBil()
    {
        $time = $this->request->request('time');
        $store_id = StoreM::getFieldByUserId($this->auth->id, 'store_id');
        $result = [];
        $result = Order::where(function ($query) use ($time){
                                    if ($time == 1) {
                                        $query->whereTime('createtime', 'd');
                                    }elseif ($time == 7) {
                                        $query->whereTime('createtime', 'w');
                                    }elseif ($time == 30) {
                                        $query->whereTime('createtime', 'm');
                                    }
                                    $query->where('store_id', $store_id);
                                    $query->whereBetween('status', [0,3]);
                                })->field('sum(real_price) as real_price, sum(get_price) as get_price, sum(id) as total')->select();
        $this->success('请求成功！', $result);
    }
}