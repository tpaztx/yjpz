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


  
    //小店-店铺设置
    'api/storeSet'=>'api/store/storeSet',
    //图片上传
    'api/upload'=>'api/upload/upload',
    //小店信息
    'api/store'=>'api/store/store',
    //已上架品牌
    'api/upBrand'=>'api/store/upBrand',
    //已下架品牌
    'api/downBrand'=>'api/store/downBrand',
    //商品上下架
    'api/storeDown'=>'api/store/storeDown',
    //整场转发
    'api/forward'=>'api/store/forward',
    'api/PriceChange'=>'api/store/PriceChange',
]);
