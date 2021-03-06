<?php

// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\Route;
// return [
//     //别名配置,别名只能是映射到控制器且访问时必须加上请求的方法
//     '__alias__'   => [
//     ],
//     //变量规则
//     '__pattern__' => [
//     ],
// 	//域名绑定到模块 
// 	'__domain__'  => [
// 	   'admin' => 'admin',
// 	   'api'   => 'api',
// 	],
// ];
Route::post([
	/* 基础配置 */
	//启动页
	'api/getStartImage' => 'api/common/getStartImage',
	//注册
	'api/register' => 'api/user/register',
	//账号密码登录
	'api/login' => 'api/user/login',
	//账号密码登录
	'api/logout' => 'api/user/logout',
	//发送验证码
	'api/sendSMS' => 'api/sms/send',
	//验证码登录
	'api/mobilelogin' =>  'api/user/mobilelogin',
	//微信授权登录
	'api/wxLogin' => 'api/user/wxLogin',
	//品牌分类获取
	'api/getCateGroyList' => 'api/wph/getCateGroyList',
	//获取用户地址
	'api/getSelectAddress' => 'api/wph/getSelectAddress',
	//密码重置
	'api/resetpwd' => 'api/User/resetpwd',
	//获取协议&说明
	'api/protocol' => 'api/common/protocol',
	//微信JSSDK
	'api/wxSdk' => 'api/User/wxSdk',
	//获取平台基础配置相关信息
	'api/getConfig' => 'api/common/getConfig',
	//用户基本信息
	'api/getUser' => 'api/user/index',
	//修改手机号
	'api/changemobile' => 'api/user/changemobile',


	/* 客户端 */
	//首页-banner轮播
	'api/getBannnerList' => 'api/index/getBannnerList',
	//首页-品牌列表
    'api/getBrandList' => 'api/wph/getBrandList',
    //首页-商品列表
    'api/getGoodsList' => 'api/wph/getGoodsList',
    //搜索历史记录
	'api/searchLog' => 'api/search/searchLog',
	// 清空搜索历史记录
	'api/searchLogDel' => 'api/search/searchLogDel',
	//搜索
	'api/search' => 'api/search/search',
	//尺码助手
	'api/getGoodsSize' => 'api/goods/getGoodsSize', 
	//品牌商品详情
	'api/getBrandInfo' => 'api/goods/getBrandInfo',
	//图文详情
	'api/getGoodsDesc' => 'api/goods/getGoodsDesc',
	//进货页展示数据
	'api/purchase' => 'api/goods/purchase',
	//新增收货地址
	'api/insertAddress' => 'api/index/insertAddress',
	//删除收货地址
	'api/delAddress' => 'api/index/delAddress',
	//获取用户的收藏地址
	'api/getUserAddress' => 'api/user/getUserAddress',
	//添加收藏商品
	'api/insertFavorites' => 'api/goods/insertFavorites',
	//删除收藏商品
	'api/delFavorites' => 'api/goods/delFavorites',
	//收藏列表
	'api/getFavorites' => 'api/goods/getFavorites',
	//APP邀请海报
	'api/poster' => 'api/index/poster',
	//更新用户地址
	'api/updateUserAddress' => 'api/user/updateUserAddress',
	//添加进货单
	'api/addShopcart' => 'api/goods/addShopcart',
	//删除进货单
	'api/delShopcart' => 'api/goods/delShopcart',
	//获取进货单列表
	'api/getShopcart' => 'api/goods/getShopcart',
	//获取用户购物车倒计时
	'api/getCountDown' => 'api/goods/getCountDown',
	//用户累计收益和余额
	'api/getUserIncome' => 'api/commission/getUserIncome',
	//我的零钱
	'api/myMoneyInfo' => 'api/user/myMoneyInfo',
	//我的团队数据
	'api/getMyTeam' => 'api/user/getMyTeam',
	//我的团队数据
	'api/getMyTeamlist' => 'api/user/getMyTeamlist',
	//系统消息
	'api/getSysNotice' => 'api/index/getSysNotice',
	//对账单-最近6个月时间
	'api/get6Month' => 'api/index/get6Month',
	//小店收益统计
	'api/getMyStroeBil' => 'api/store/getMyStroeBil',
	//用户提现
	'api/addWithdraw' => 'api/user/addWithdraw',



	/* H5端 */
    //小店-店铺设置
    'api/storeSet'=>'api/store/storeSet',
    //图片上传
    'api/upload'=>'api/upload/upload',
    //小店信息
    'api/storeMessage'=>'api/store/storeMessage',
    //已上架品牌
    'api/upBrand'=>'api/store/upBrand',
    //已下架品牌
    'api/downBrand'=>'api/store/downBrand',
    //商品上下架
    'api/storeDown'=>'api/store/storeDown',
    //整场转发
    'api/forward'=>'api/store/forward',
    //改价设置
    'api/PriceChange'=>'api/store/PriceChange',
    //获取改价
    'api/getPriceChange'=>'api/store/getPriceChange',
    //H5小店商品列表
    'api/smallStoreBrandShow'=>'api/store/smallStoreBrandShow',
    //商品详情
    'api/goodShow'=>'api/goods/goodShow',
    //商品分类
    'api/goodCate'=>'api/goods/goodCate',
    //购物车操作
    'api/addCart'=>'api/goods/addCart',
    //购物车列表
    'api/shoppingCart'=>'api/goods/shoppingCart',
    //删除购物车
    'api/delShoppingCart'=>'api/goods/delShoppingCart',
    //小店 分享店铺
    'api/shareStore'=>'api/store/shareStore',

    /* 订单 */
    //下单
    'api/CreateOrder'=>'api/order/CreateOrder',
    //取消订单
    'api/cancelOrder'=>'api/order/cancelOrder',
    //申请退货页面数据
    'api/return_good_data'=>'api/order/return_good_data',
    //退货预览
    'api/returnPreview'=>'api/order/returnPreview',
    //申请退货
    'api/return_good'=>'api/order/return_good',
    //取消退货
    'api/cancelReturnOrder'=>'api/order/cancelReturnOrder',
    //退货承运商
    'api/carrierList'=>'api/order/cancelReturnOrder',
    //退货物流
    'api/returnLogistics'=>'api/order/returnLogistics',
    //订单列表
    'api/orderList'=>'api/order/orderList',
    //订单详情
    'api/orderShow'=>'api/order/orderShow',
    //删除订单
    'api/delOrder'=>'api/order/delOrder',
    //微信支付
    'api/orderPay'=>'api/order/orderPay',
    //确认收货
    'api/confirmOrder'=>'api/order/confirmOrder',
]);

Route::get([
	//检测平台用户的等级信息
    'api/userGroupID' => 'api/common/userGroupID', 
    //定时查询商品状态
    'api/goodsOnline' => 'api/common/goodsOnline',
    //下载账单
	'api/downLoadBil' => 'api/index/downLoadBil',
]);
