<?php

namespace app\api\controller;

use app\common\controller\Api;
use app\admin\model\Store;
use app\common\model\Order;

/**
 * 分销&佣金相关接口
 */
class Commission extends Api
{

    //如果$noNeedLogin为空表示所有接口都需要登录才能请求
    //如果$noNeedRight为空表示所有接口都需要验证权限才能请求
    //如果接口已经设置无需登录,那也就无需鉴权了
    //
    // 无需登录的接口,*表示全部
    protected $noNeedLogin = [''];
    // 无需鉴权的接口,*表示全部
    protected $noNeedRight = ['*'];

    /**
     * 用户累计收益和余额
     * user_money 用户余额
     */
    public function getUserIncome()
    {
        $page = $this->request->request('page')?:1;
        //获取自购佣金
        $proportion = Order::where(['user_id'=>$this->auth->id, 'status'=>3])->count('real_price');

        $pro_list = Order::where(['user_id'=>$this->auth->id, 'status'=>3])->field('order_no,proportion')->order('id', 'desc')->paginate(10,false,$page);
        dump('this here1');die;
        //获取代购的佣金
        $commission = 0;
        $com_list = [];
        $store = Store::where('user_id',$this->auth->id)->find();
        if ($store) {
            $commission = Order::where(['store_id'=>$store['id'], 'status'=>3])->count('real_price');
            $com_list = Order::where(['store_id'=>$store['id'], 'status'=>3])->field('order_no,proporti')->order('id', 'desc')->paginate(10,false,$page);
        }
        
        $data = [
            'user_money' => $this->auth_money,
            'my'         => $proportion + $commission,
            'commission' => $commission,
            'pro_list'   => $pro_list,
            'com_list'   => $com_list,
        ];
        $this->success('请求成功！', $data);
    }

}
