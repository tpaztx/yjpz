<?php

namespace app\admin\controller;

use app\api\controller\WxRefund;
use app\common\controller\Backend;
use app\common\model\User;
use think\Db;

/**
 * 
 *
 * @icon fa fa-circle-o
 */
class Order extends Backend
{
    
    /**
     * Order模型对象
     * @var \app\admin\model\Order
     */
    protected $model = null;

    public function _initialize()
    {
        parent::_initialize();

        $storeList=\app\admin\model\Store::all();
        $storeList = $this->List($storeList,'id',"store_name");
        $userList=User::all();
        $userList = $this->List($userList,"id","nickname");
        $this->assignconfig('storeList',$storeList);
        $this->assignconfig('userList',$userList);
        $this->model = new \app\admin\model\Order;
    }

    public function import()
    {
        parent::import();
    }

    /**
     * 订单详情
     */
    public function show($ids = null)
    {
        $detail = \app\admin\model\Order::with(['goods'])
            ->where('id',$ids)
            ->find();
        if(!$detail){
            $this->error('服务器繁忙！');
        }
        $this->assign('detail',$detail);
        return $this->fetch();
    }

    public function confirmReturn($ids = null)
    {
        $order = \app\admin\model\Order::where('id',$ids)->find();
        // 启动事务
        Db::startTrans();
        try{
            $order->status = 4;
            $order->after_sales = 5;
            $order->save();
//            $refund = new WxRefund();
//            $refund->refund($order['order_no']);
            // 提交事务
            Db::commit();
            $res = true;
        } catch (\Exception $e) {
            // 回滚事务
            Db::rollback();
            $res = false;
        }
        if($res){
            $this->success('退款成功！');
        }
        $this->error($e->getMessage());

    }
    /**
     * 默认生成的控制器所继承的父类中有index/add/edit/del/multi五个基础方法、destroy/restore/recyclebin三个回收站方法
     * 因此在当前控制器中可不用编写增删改查的代码,除非需要自己控制这部分逻辑
     * 需要将application/admin/library/traits/Backend.php中对应的方法复制到当前控制器,然后进行修改
     */
    

}
