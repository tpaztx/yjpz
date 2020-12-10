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
	/*基础配置*/
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
	//首页-banner轮播
	'api/getBannnerList' => 'api/index/getBannnerList',
	//首页-品牌列表
	'api/getBrandLists' => 'api/wph/getBrandList',
]);
