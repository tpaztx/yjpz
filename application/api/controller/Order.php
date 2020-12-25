<?php


namespace app\api\controller;


use app\common\controller\Api;
use app\common\model\Address;
use app\common\model\OrderGood;
use think\Db;
use  app\common\model\Order as OrderM;
use think\Exception;

class Order extends Api
{
    // 无需登录的接口,*表示全部
    protected $noNeedLogin = '';
    // 无需鉴权的接口,*表示全部
    protected $noNeedRight = ['*'];
    /**
     * 用户下单
     */
    public function CreateOrder()
    {
        $order_no = date('Ymd') . str_pad(mt_rand(1, 99999), 5, '0', STR_PAD_LEFT);
        $user = $this->auth->getUser();
        $param = $this->request->param();
        $validate=$this->validate($param,[
            'store_id'=>'require',
            'total_price'=>'require',
            'real_price'=>'require',
            'yunfei_price'=>'require',
            'address_id'=>'require',
            'type'=>'require',
            'good'=>'require',
        ],[
            'store_id.require'=>'无效的小店！',
            'total_price.require'=>'缺少总金额！',
            'real_price.require'=>'缺少实际支付金额！',
            'yunfei_price.require'=>'缺少运费！',
            'address_id.require'=>'请选择收获地址！',
            'good.require'=>'请选择商品！',
        ]);
        if($validate !== true){
            $this->error($validate);
        }
        $address = Address::get($param['address_id']);
        if(!$address){
            $this->error('无效的地址！');
        }
        $OrderData = [
            'user_id'=>$user['id'],
            'order_no'=>$order_no,
            'store_id'=>$param['store_id'],
            'total_price'=>$param['total_price'],
            'real_price'=>$param['real_price'],
            'yunfei_price'=>$param['yunfei_price'],
            'username'=>$address['name'],
            'phone'=>$address['mobile'],
            'address'=>$address['province'].$address['city'].$address['area'].$address['address'],
            'time'=>$address['is_time'],
            'type'=>$param['type'],
        ];
        // 启动事务
        Db::startTrans();
        try{
            $order = OrderM::create($OrderData);
            foreach ($param['good'] as $item){
                $OrderGood = [
                    'order_id'=>$order['id'],
                    'good_title'=>$item['good_title'],
                    'good_price'=>$item['good_price'],
                    'good_num'=>$item['good_num'],
                    'good_size'=>$item['good_size'],
                    'good_image'=>$item['good_image'],
                    'goodId'=>$item['goodId'],
                ];
                OrderGood::create($OrderGood);
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
            $this->error('下单失败！');
        }
        $this->success('下单成功！请尽快支付！');
    }
    /**
     * 取消订单
     */
    public function cancelOrder()
    {
        $order_id = $this->request->param('order_id');
        $order = OrderM::get($order_id);
        if(!$order){
            $this->error('该订单不存在');
        }
        if($order['status'] != 0 && $order['status'] != 1){
            $this->error('该订单无法取消！');
        }
        $order['status'] = -1;
        $res = $order->save();
        if(!$res){
            $this->error('取消订单失败！');
        }
        $this->success('取消订单成功！');
    }
    /**
     * 申请退货页面数据
     */
    public function return_good_data()
    {
        $order_id = $this->request->param('order_id');
        $order = OrderM::get($order_id);
        if(!$order || $order['status'] != 2){
            $this->error('无效的订单！');
        }
        $orderGoods = OrderGood::where('order_id',$order_id)->group('goodId')->select();
        foreach ($orderGoods as &$item){
            $goods = OrderGood::where('goodId',$item['goodId'])->select();
            $size = array();
            foreach ($goods as $k=>$good){
                $size[$k]['size'] = $good['good_size'];
                $size[$k]['num'] = $good['good_num'];
            }
            $item['good_size'] = $size;
        }
        if(!$orderGoods){
            $this->error('服务器繁忙！');
        }
        $this->success('请求成功！',$orderGoods);
    }
    /**
     * 申请退货
     */
    public function return_good()
    {
        $param = $this->request->param();
        $order = OrderM::get($param['order_id']);
        if(!$order || $order['status'] != 2){
            $this->error('无效的订单！');
        }
        if(!$param['reason']){
            $this->error('请选择退货原因！');
        }

// 启动事务
        Db::startTrans();
        try{
            if(!empty($param['goods'])){
                $return_price = 0;
                foreach ($param['goods'] as $item){
                    $good = OrderGood::where(['goodId'=>$item['goodId'],'good_size'=>$item['size']])->find();
                    if(!$good){
                        throw new Exception('存在无效的商品！');
                    }
                    if($item['return_num'] > $good['good_num']){
                        throw new Exception('退货数量不得大于购买数量！');
                    }
                    $good->return_num = $item['return_num'];
                    $good->good_num -= $item['return_num'];
                    $good->save();
                    $return_price += $good['good_price']*$item['return_num'];
                }
            }
            $order->after_sales = 1;
            $order->return_price = $return_price;
            $order->reason = $param['reason'];
            $order->save();
            // 提交事务
            Db::commit();
            $res = true;
        } catch (\Exception $e) {
            // 回滚事务
            Db::rollback();
            $res = false;

        }
        if(!$res){
            $this->error($e->getMessage());
        }
        $this->success('申请退货成功！请等待后台管理员审核！');
    }
    /**
     * 取消退货
     */
    public function cancelReturnOrder()
    {
        $order_id = $this->request->param('order_id');
        // 启动事务
        Db::startTrans();
        try{
            OrderGood::where('order_id',$order_id)->update(['return_num'=>0]);
            OrderM::where('id',$order_id)->update(['return_price'=>0,'reason'=>0,'after_sales'=>0]);
            // 提交事务
            Db::commit();
            $res = true;
        } catch (\Exception $e) {
            // 回滚事务
            Db::rollback();
            $res = false;
        }
        if(!$res){
            $this->error($e->getMessage());
        }
        $this->success('取消退货成功！');
    }
    /**
     * 退货物流
     */
    public function returnLogistics()
    {
        $param = $this->request->param();
        $validate=$this->validate($param,[
            'return_company'=>'require',
            'return_no'=>'require',
            'order_id'=>'require',
        ],[
            'return_company.require'=>'请选择物流公司',
            'return_no.require'=>'请填写物流单号',
            'order_id.require'=>'请选择退货订单',
        ]);
        if($validate !== true){
            $this->error($validate);
        }
        $order = OrderM::get($param['order_id']);
        if(!$order){
            $this->error('无效的订单！');
        }
        $order->return_company = $param['return_company'];
        $order->return_no= $param['return_no'];
        $order->return_desc= $param['return_desc'];
        $res = $order->save();
        if(!$res){
            $this->error('服务器繁忙！');
        }
        $this->success('提交成功！');
    }
    /**
     * 订单列表
     */
    public function orderList()
    {
        $user = $this->auth->getUser();
        $steoM = new \app\admin\model\Store();
        $store_id = $steoM->getStore($user['id']);
        $status = $this->request->param('status');
        $after_sales = $this->request->param('after_sales');
        OrderM::with('goods')
            ->where(function ($query) use ($store_id,$status,$user,$after_sales){
                //APP小店查看
                if(isset($store_id) && !empty($store_id)){
                    $query->where('store_id',$store_id);
                }else{
//                 H5用户查看
                    $query->where('user_id',$user['id']);
                }
                //订单状态 不传为全部订单
                if(isset($status)){
                    $query->where('status',$status);
                }
                //是否有申请售后
                if(isset($after_sales)){
                    $query->where('after_sales','<>',0);
                }
            })
            ->field('id,order_no,status,after_sales,createtime,updatetime')
            ->order('createtime','desc')
            ->select();
    }

}