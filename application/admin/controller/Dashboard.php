<?php

namespace app\admin\controller;

use app\common\controller\Backend;
use app\common\model\User;
use app\common\model\GoodsList;
use app\common\model\Order;
use app\common\model\BrandList;
use think\Config;

/**
 * 控制台
 *
 * @icon fa fa-dashboard
 * @remark 用于展示当前系统中的统计数据、统计报表及重要实时数据
 */
class Dashboard extends Backend
{

    /**
     * 查看
     */
    public function index()
    {
        $seventtime = \fast\Date::unixtime('day', -7);
        $paylist = $createlist = [];
        for ($i = 0; $i < 7; $i++)
        {
            $day = date("Y-m-d", $seventtime + ($i * 86400));
            $createlist[$day] = mt_rand(20, 200);
            $paylist[$day] = mt_rand(1, mt_rand(1, $createlist[$day]));
        }
        $hooks = config('addons.hooks');
        $uploadmode = isset($hooks['upload_config_init']) && $hooks['upload_config_init'] ? implode(',', $hooks['upload_config_init']) : 'local';
        $addonComposerCfg = ROOT_PATH . '/vendor/karsonzhang/fastadmin-addons/composer.json';
        Config::parse($addonComposerCfg, "json", "composer");
        $config = Config::get("composer");
        $addonVersion = isset($config['version']) ? $config['version'] : __('Unknown');
        $this->view->assign([
            'totaluser'        => User::count('id'),
            'totalviews'       => GoodsList::group('goodFullId')->count('id'),
            'totalorder'       => Order::count('id'),
            'totalorderamount' => Order::sum('real_price'),
            'todayuserlogin'   => User::whereTime('logintime', 'd')->count('id'),
            'todayusersignup'  => User::whereTime('createtime', 'd')->count('id'),
            'todayorder'       => Order::where('createtime', 'd')->count('id'),
            'unsettleorder'    => Order::where('status',1)->count('id'),
            'sevendnu'         => BrandList::group('adId')->count('id'),
            'sevendau'         => Order::where('status',3)->whereTime('updatetime', 'd')->sum('real_price'),
            'paylist'          => $paylist,
            'createlist'       => $createlist,
            'addonversion'       => $addonVersion,
            'uploadmode'       => $uploadmode
        ]);

        return $this->view->fetch();
    }

}
