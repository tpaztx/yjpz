<?php


namespace app\api\controller;


use app\admin\model\StoreDown;
use app\common\controller\Api;
use app\admin\model\Store as StoreM;
use app\common\model\BrandList;
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
            $list['brandList'] = $array;
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
            $array = $this->object_array($list['brandList']);
            $array2 = array();
            foreach ($array as $k=>$item){
                if(in_array($item['adId'],$downIdArray)){
                    $array2[] = $item;
                }
            }
            $list['brandList'] = $array2;
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
}