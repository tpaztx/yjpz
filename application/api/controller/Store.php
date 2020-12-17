<?php


namespace app\api\controller;


use app\admin\model\StoreDown;
use app\common\controller\Api;
use app\admin\model\Store as StoreM;
use app\common\model\BrandList;
use app\common\model\GoodsList;
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
    public function store()
    {
        $user = $this->auth->getUser();
        $store = StoreM::where('user_id',$user['id'])->find();
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
        $time = time();
        $list = BrandList::where('sellTimeTo','>',$time)->paginate($limit,false,[ 'query' => request()->param()]);
        if(!empty($list)){
            $array = array();
            foreach ($list as $k=>$item){
                if(!in_array($item['adId'],$downIdArray)){
                    $array[] = $item;
                }
            }
            $list = $array;
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
        $time = time();
        $list = BrandList::where('sellTimeTo','>',$time)->paginate($limit,false,[ 'query' => request()->param()]);
        if(!empty($list)){
            $array = array();
            foreach ($array as $k=>$item){
                if(in_array($item['adId'],$downIdArray)){
                    $array[] = $item;
                }
            }
            $list = $array;
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
     */
    public function PriceChange()
    {
        $user = $this->auth->getUser();
        $storeM = new \app\admin\model\Store();
        $store = $storeM->getStore($user['id']);
        $type = $this->request->param('type');
    }

    
}