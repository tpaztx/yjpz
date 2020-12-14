<?php


namespace app\api\controller;


use app\admin\model\StoreDown;
use app\common\controller\Api;
use app\admin\model\Store as StoreM;

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
        $pageIndex = $this->request->request('pageIndex')?:1;
        $pageSize = $this->request->request('pageSize')?:10;
        $user = $this->auth->getUser();
        $storeM = new StoreM;
        $store= $storeM->getStore($user['id']);
        //获取小店已下架品牌id
        $storeDown = new StoreDown;
        $downIdArray=$storeDown->getDownId($store['id']);
        $vph = new Wph();
        $list = $vph->brandList('101101', $pageIndex, $pageSize);
        if(!empty($list)){
            $array = [];
            foreach ($list as $k=>$item){
                if(in_array($item['adId'],$downIdArray)){
                    $array[] = $list[$k];
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
        $pageIndex = $this->request->request('pageIndex')?:1;
        $pageSize = $this->request->request('pageSize')?:10;
        $user = $this->auth->getUser();
        $storeM = new StoreM;
        $store= $storeM->getStore($user['id']);
        //获取小店已下架品牌id
        $storeDown = new StoreDown;
        $downIdArray = $storeDown->getDownId($store['id']);
        $vph = new Wph();
        $list = $vph->brandList('101101', $pageIndex, $pageSize);
        if(!empty($list)){
            $array = $this->object_array($list['brandList']);
            $array2 = array();
            foreach ($array as $k=>$item){
                if(!in_array($item['adId'],$downIdArray)){
                    $array2[] = $list[$k];
                }
            }
            dump($array2);exit;
            $list['brandList'] = $array2;
            $this->success('请求成功！',$array2);
        }
        $this->error('无数据！');
    }
}