<?php


namespace app\api\controller;


use app\common\controller\Api;
use app\common\model\Address;
use app\common\model\OrderGood;
use think\Db;
use app\common\model\Order as OrderM;
use think\Exception;
use app\common\model\UserGroup;


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
        $validate = $this->validate($param,[
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
        //自购佣金
        $proportion = 0;
        if ($param['type'] == 'APP') {
            $pro_fee = UserGroup::where('id', $this->auth->group_id)->value('proportion');
            if (!$pro_fee) {
                $this->error('未获取到平台的自购佣金比例！');
            }
            $proportion = $param['real_price'] * $pro_fee * 0.01;
        }
        dump($proportion);die;
        //分销佣金
        $commission1 = $commission2 = 0;
        $com_fee1 = UserGroup::where('id', $this->auth->group_id)->value('commission1');
        $com_fee2 = UserGroup::where('id', $this->auth->group_id)->value('commission2');
        $commission1 = $param['real_price'] * $com_fee1 * 0.01;
        $commission2 = $param['real_price'] * $com_fee2 * 0.01;
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
            'proportion' => round($proportion, 2),
            'commission1' => round($commission1, 2),
            'commission2' => round($commission2, 2),
        ];
        // 启动事务0
        Db::startTrans();
        try{
            $order=OrderM::create($OrderData);
            foreach ($param['good'] as $item){
                $OrderGood = [
                    'order_id'=>$order['id'],
                    'good_title'=>$item['good_title'],
                    'good_price'=>$item['good_price'],
                    'good_num'=>$item['good_num'],
                    'good_size'=>$item['good_size'],
                    'good_image'=>$item['good_image'],
                    'goodId'=>$item['goodId'],
                    'sizeId'=>$item['sizeId'],
                ];
                OrderGood::create($OrderGood);
                $sizeInfo[$item['sizeId']] = $item['good_num'];
            }
            $sizeInfo=\GuzzleHttp\json_encode($sizeInfo);
            $wph=new Wph();
            $wphOrderNo = $wph->orderWphCreate("$order_no","{$order['id']}","{$param['address_id']}","$sizeInfo");
            $order->wph_order_no = $wphOrderNo;
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
        // 启动事务
        Db::startTrans();
        try{
            $order['status'] = -1;
            $order->save();
            $wph=new Wph();
            $wph->cancelOrder($order['wph_order_no']);
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
            $goods = OrderGood::where(['goodId'=>$item['goodId'],'order_id'=>$order_id])->select();
            $size = array();
            foreach ($goods as $k=>$good){
                $size[$k]['size'] = $good['good_size'];
                $size[$k]['num'] = $good['good_num'];
                $size[$k]['is_select'] = 0;
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
                    $good = OrderGood::where(['goodId'=>$item['goodId'],'sizeId'=>$item['sizeId']])->find();
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
                    $sizeInfo[$item['sizeId']] = $item['return_num'];
                }
            }
            $sizeInfo = \GuzzleHttp\json_encode($sizeInfo);
            $order->after_sales = 1;
            $order->return_price = $return_price;
            $order->reason = $param['reason'];
            $order->save();
            $wph=new Wph();
            $wph->orderRrturn($order['wph_order_no'],$sizeInfo);
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
            $order = OrderM::where('id',$order_id)->find();
            $order->return_price=0;
            $order->reason=0;
            $order->after_sales=0;
            $order->save();
            $wph=new Wph();
            $wph->cancelReturnOrder($order['wph_order_no']);
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
    /*
     * 获取承运商
     */
    public function carrierList()
    {
        $wph=new Wph();
        $list = $wph->carrierList();
        if(!$list){
            $this->error('请求失败！');
        }
        $this->success('请求成功！',$list);
    }
    /**
     * 退货物流
     */
    public function returnLogistics()
    {
        $param = $this->request->param();
        $validate=$this->validate($param,[
            'return_company'=>'require',
            'carriersCode'=>'require',
            'return_no'=>'require',
            'order_id'=>'require',
        ],[
            'return_company.require'=>'请选择物流公司',
            'carriersCode.require'=>'请选择物流公司',
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
        $order->carriersCode= $param['carriersCode'];
        // 启动事务
        Db::startTrans();
        try{
            $res = $order->save();
            $wph = new Wph();
            $wph->returnTransportNo("{$order['wph_order_no']}","{$param['carriersCode']}","{$param['return_no']}","{$param['return_desc']}");
            // 提交事务
            Db::commit();
        } catch (\Exception $e) {
            // 回滚事务
            Db::rollback();
        }

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
        $orders = OrderM::with('goods')
            ->where(function ($query) use ($store_id,$status,$user,$after_sales){
                //APP小店查看
                if($store_id && !empty($store_id)){
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
        if(empty($orders)){
            $this->error('无订单数据！');
        }
        if(!$orders){
            $this->error('服务器繁忙！');
        }
        $this->success('请求成功！',$orders);
    }
    /**
     * 订单详情
     */
    public function orderShow()
    {
        $order_id = $this->request->param('order_id');
        $order = OrderM::with('goods')->where('id',$order_id)->find();
        if(!$order){
            $this->error('无效的订单！');
        }
        $this->success('请求成功！',$order);
    }
    /**
     * 删除订单
     */
    public function delOrder()
    {
        $order_id = $this->request->param('order_id');
        $order = OrderM::get($order_id);
        if(!$order){
            $this->error('无效的订单！');
        }
        if($order['status'] != -1){
            $this->error('无法删除该订单！');
        }

        // 启动事务
        Db::startTrans();
        try{
            $order->delete();
            OrderGood::where('order_id',$order_id)->delete();
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
        $this->success('删除成功！');
    }
}