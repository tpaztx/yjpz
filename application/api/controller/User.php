<?php

namespace app\api\controller;

use app\admin\model\Store;
use app\common\controller\Api;
use app\common\library\Ems;
use app\common\library\Sms;
use app\common\library\Token;
use app\common\model\JSSDK;
use app\common\model\Address;
use fast\Random;
use think\Db;
use think\Validate;
use app\common\model\User as UserM;
use function Qiniu\json_decode;
use function Symfony\Component\String\s;
use function Symfony\Component\String\u;

/**
 * 会员接口
 */
class User extends Api
{
    protected $AppId = 'wxcebf3e4c3aebac0f';
    protected $AppSecret = '4408178209ce1eb88e7464f7b996262c';
    protected $noNeedLogin = ['login', 'mobilelogin', 'register', 'resetpwd', 'changeemail', 'changemobile', 'third','wxLogin'];
    protected $noNeedRight = '*';

    public function _initialize()
    {
        parent::_initialize();
    }


    /**
     * 微信jssdk信息
     */
    public function wxSdk()
    {
        $url = $this->request->param('url');
        $sdk = new JSSDK("$this->AppId","$this->AppSecret","$url");
        $array = $sdk->getSignPackage();
        if(!$array){
            $this->error('服务器繁忙！');
        }
        $this->success('请求成功！',$array);
    }

    /**
     * 会员中心
     */
    public function index()
    {
        $this->success('', ['welcome' => $this->auth->nickname]);
    }

    /**
     * 会员登录
     *
     * @param string $account 账号
     * @param string $password 密码
     */
    public function login()
    {
        $account = $this->request->request('account');
        $password = $this->request->request('password');
        if (!$account || !$password) {
            $this->error(__('Invalid parameters'));
        }
        $ret = $this->auth->login($account, $password);
        if ($ret) {
            $data = ['userinfo' => $this->auth->getUserinfo()];
            $this->success(__('Logged in successful'), $data);
        } else {
            $this->error($this->auth->getError());
        }
    }

    /**
     * 手机验证码登录
     *
     * @param string $mobile 手机号
     * @param string $captcha 验证码
     */
    public function mobilelogin()
    {
        $mobile = $this->request->request('mobile');
        $captcha = $this->request->request('captcha');
        if (!$mobile || !$captcha) {
            $this->error(__('Invalid parameters'));
        }
        if (!Validate::regex($mobile, "^1\d{10}$")) {
            $this->error(__('Mobile is incorrect'));
        }
        if (!Sms::check($mobile, $captcha, 'mobilelogin')) {
            $this->error(__('Captcha is incorrect'));
        }
        $user = \app\common\model\User::getByMobile($mobile);
        if ($user) {
            if ($user->status != 'normal') {
                $this->error(__('Account is locked'));
            }
            //如果已经有账号则直接登录
            $ret = $this->auth->direct($user->id);
        } else {
            // $ret = $this->auth->register($mobile, Random::alnum(), '', $mobile, []);
            $this->error('未查询到当前账号信息，请先注册！');
        }
        if ($ret) {
            Sms::flush($mobile, 'mobilelogin');
            $data = ['userinfo' => $this->auth->getUserinfo()];
            $this->success(__('Logged in successful'), $data);
        } else {
            $this->error($this->auth->getError());
        }
    }

    /**
     * 注册会员
     *
     * @param string $username 用户名
     * @param string $password 密码
     * @param string $email 邮箱
     * @param string $mobile 手机号
     * @param string $code 验证码
     */
    public function register()
    {
        $mobile = $this->request->request('mobile');
        // $username = $this->request->request('username');
        $password = $this->request->request('password');
        // $email = $this->request->request('email');
        $code = $this->request->request('code');
        $trade_code = $this->request->request('trade_code');
        if (!$mobile || !$password) {
            $this->error(__('Invalid parameters'));
        }
        // if ($email && !Validate::is($email, "email")) {
        //     $this->error(__('Email is incorrect'));
        // }
        //验证邀请码
        if (!$trade_code || empty($trade_code)) {
            $this->error('请填写邀请码！');
        }
        $user = UserM::getByTradeCode($trade_code);
        if (!$user) {
            $this->error('未查询到上级邀请信息，请重新确认！');
        }
        if ($mobile && !Validate::regex($mobile, "^1\d{10}$")) {
            $this->error(__('Mobile is incorrect'));
        }
        // $ret = Sms::check($mobile, $code, 'register');
        // if (!$ret) {
        //     $this->error(__('Captcha is incorrect'));
        // }

        // 启动事务
        Db::startTrans();
        try {
            $ret = $this->auth->register($mobile, $password, '', $mobile, ['pid' => $trade_code]);
            $data = ['userinfo' => $this->auth->getUserinfo()];
            Store::create(['user_id' => $data['userinfo']['id']]);
            // 提交事务
            Db::commit();
            $ret = true;
        } catch (\Exception $e) {
            // 回滚事务
            Db::rollback();
            $ret = false;
        }
        if ($ret) {
            $this->success(__('Sign up successful'), $data);
        } else {
            $this->error($this->auth->getError());
        }
    }

    /**
     * 退出登录
     */
    public function logout()
    {
        $this->auth->logout();
        $this->success(__('Logout successful'));
    }

    /**
     * 修改会员个人信息
     *
     * @param string $avatar 头像地址
     * @param string $username 用户名
     * @param string $nickname 昵称
     * @param string $bio 个人简介
     */
    public function profile()
    {
        $user = $this->auth->getUser();
        $username = $this->request->request('username');
        $nickname = $this->request->request('nickname');
        $bio = $this->request->request('bio');
        $avatar = $this->request->request('avatar', '', 'trim,strip_tags,htmlspecialchars');
        if ($username) {
            $exists = \app\common\model\User::where('username', $username)->where('id', '<>', $this->auth->id)->find();
            if ($exists) {
                $this->error(__('Username already exists'));
            }
            $user->username = $username;
        }
        if ($nickname) {
            $exists = \app\common\model\User::where('nickname', $nickname)->where('id', '<>', $this->auth->id)->find();
            if ($exists) {
                $this->error(__('Nickname already exists'));
            }
            $user->nickname = $nickname;
        }
        $user->bio = $bio;
        $user->avatar = $avatar;
        $user->save();
        $this->success();
    }

    /**
     * 修改邮箱
     *
     * @param string $email 邮箱
     * @param string $captcha 验证码
     */
    public function changeemail()
    {
        $user = $this->auth->getUser();
        $email = $this->request->post('email');
        $captcha = $this->request->request('captcha');
        if (!$email || !$captcha) {
            $this->error(__('Invalid parameters'));
        }
        if (!Validate::is($email, "email")) {
            $this->error(__('Email is incorrect'));
        }
        if (\app\common\model\User::where('email', $email)->where('id', '<>', $user->id)->find()) {
            $this->error(__('Email already exists'));
        }
        $result = Ems::check($email, $captcha, 'changeemail');
        if (!$result) {
            $this->error(__('Captcha is incorrect'));
        }
        $verification = $user->verification;
        $verification->email = 1;
        $user->verification = $verification;
        $user->email = $email;
        $user->save();

        Ems::flush($email, 'changeemail');
        $this->success();
    }

    /**
     * 修改手机号
     *
     * @param string $mobile 手机号
     * @param string $captcha 验证码
     */
    public function changemobile()
    {
        $user = $this->auth->getUser();
        $mobile = $this->request->request('mobile');
        $captcha = $this->request->request('captcha');
        if (!$mobile || !$captcha) {
            $this->error(__('Invalid parameters'));
        }
        if (!Validate::regex($mobile, "^1\d{10}$")) {
            $this->error(__('Mobile is incorrect'));
        }
        if (\app\common\model\User::where('mobile', $mobile)->where('id', '<>', $user->id)->find()) {
            $this->error(__('Mobile already exists'));
        }
        $result = Sms::check($mobile, $captcha, 'changemobile');
        if (!$result) {
            $this->error(__('Captcha is incorrect'));
        }
        $verification = $user->verification;
        $verification->mobile = 1;
        $user->verification = $verification;
        $user->mobile = $mobile;
        $user->save();

        Sms::flush($mobile, 'changemobile');
        $this->success();
    }

    /**
     * 第三方登录
     *
     * @param string $platform 平台名称
     * @param string $code Code码
     */
    public function third()
    {
        $url = url('user/index');
        $platform = $this->request->request("platform");
        $code = $this->request->request("code");
        $config = get_addon_config('third');
        if (!$config || !isset($config[$platform])) {
            $this->error(__('Invalid parameters'));
        }
        $app = new \addons\third\library\Application($config);
        //通过code换access_token和绑定会员
        $result = $app->{$platform}->getUserInfo(['code' => $code]);
        if ($result) {
            $loginret = \addons\third\library\Service::connect($platform, $result);
            if ($loginret) {
                $data = [
                    'userinfo' => $this->auth->getUserinfo(),
                    'thirdinfo' => $result
                ];
                $this->success(__('Logged in successful'), $data);
            }
        }
        $this->error(__('Operation failed'), $url);
    }

    /**
     * 重置密码
     *
     * @param string $mobile 手机号
     * @param string $newpassword 新密码
     * @param string $captcha 验证码
     */
    public function resetpwd()
    {
        // $type = $this->request->request("type");
        $mobile = $this->request->request("mobile");
        // $email = $this->request->request("email");
        $newpassword = $this->request->request("newpassword");
        $captcha = $this->request->request("captcha");
        if (!$newpassword || !$captcha) {
            $this->error(__('Invalid parameters'));
        }
        // if ($type == 'mobile') {
            if (!Validate::regex($mobile, "^1\d{10}$")) {
                $this->error(__('Mobile is incorrect'));
            }
            $user = \app\common\model\User::getByMobile($mobile);
            if (!$user) {
                $this->error(__('User not found'));
            }
            $ret = Sms::check($mobile, $captcha, 'resetpwd');
            // if (!$ret) {
            //     $this->error(__('Captcha is incorrect'));
            // }
            Sms::flush($mobile, 'resetpwd');
        // } 
        // else {
        //     if (!Validate::is($email, "email")) {
        //         $this->error(__('Email is incorrect'));
        //     }
        //     $user = \app\common\model\User::getByEmail($email);
        //     if (!$user) {
        //         $this->error(__('User not found'));
        //     }
        //     $ret = Ems::check($email, $captcha, 'resetpwd');
        //     if (!$ret) {
        //         $this->error(__('Captcha is incorrect'));
        //     }
        //     Ems::flush($email, 'resetpwd');
        // }
        //模拟一次登录
        $this->auth->direct($user->id);
        $ret = $this->auth->changepwd($newpassword, '', true);
        if ($ret) {
            $this->success(__('Reset password successful'));
        } else {
            $this->error($this->auth->getError());
        }
    }

    /**
     * 微信登录
     */
    public function wxLogin()
    {
        $code = $this->request->param('code') ?? '';
        $type = $this->request->param('type') ?? '';
        $mobile = $this->request->param('mobile') ?? '';
        $appid = $this->AppId;
        $secret = $this->AppSecret;
        $url = "https://api.weixin.qq.com/sns/oauth2/access_token?appid=" . $appid . "&secret=" . $secret . "&code=" . $code . "&grant_type=authorization_code";
        $list = $this->http($url, 'GET');
        $list = $list [1];
        $list = \GuzzleHttp\json_decode($list, true);
        if (!empty($list['openid']) && isset($list['openid'])) {

            //获取用户信息
            $url = "https://api.weixin.qq.com/sns/userinfo?access_token=" . $list['access_token'] . "&openid=" . $list['openid'] . "&lang=zh_CN ";
            $list = $this->http($url, 'GET');
            $list = $list [1];
            $result = \GuzzleHttp\json_decode($list, true);
            $token = Random::uuid();
            //保存用户信息
            $data ['openid'] = $result ['openid'];
            $data ['nickname'] = $result ['nickname'];
            $data ['gender'] = $result ['sex'];
            $data ['city'] = $result ['city'];
            $data ['province'] = $result ['province'];
            $data ['avatar'] = $result ['headimgurl'];
            $data ['country'] = $result ['country'];
            $data ['trade_code'] = Random::alnum();
            $data ['type'] = $type;
            $row = \app\admin\model\User::where(['openid' => $result['openid'], 'type' => $type])->find();
            if ($row) {
                $this->success('登录成功！', $row);
            }
            if ($type == 'APP' && !empty($mobile)) {
                $user = \app\admin\model\User::where('mobile', $mobile)->find();

                if ($user) {
                    $user ['openid'] = $result ['openid'];
                    $user ['nickname'] = $result ['nickname'];
                    $user ['gender'] = $result ['sex'];
                    $user ['city'] = $result ['city'];
                    $user ['province'] = $result ['province'];
                    $user ['avatar'] = $result ['headimgurl'];
                    $user ['country'] = $result ['country'];
                    $user ['jointime'] = time();
                    $user ['type'] = $type;
                    $user ['trade_code'] = Random::alnum();
                    $res = $user->save();
                    if (!$res) {
                        $user->delete();
                        $this->error('授权失败！');
                    }

                    Token::set($token, $user['id']);
                    $this->success('授权APP成功！', $user);
                }
            }
            $this->auth->register('', '', '', '', $data);
            $userInfo = ['userinfo' => $this->auth->getUserinfo()];
            if ($userInfo) {
                $this->success('授权H5成功！', $userInfo);
            }
            $this->error('服务器繁忙！');
        }
        $this->error($list);
    }

    /**
     * 获取用户的收货地址
     */
    public function getUserAddress()
    {
        $addressID = $this->request->request('addressID');
        $result;
        if ($addressID) {
            $result = Address::where(['id'=>$addressID, 'user_id'=>$this->auth->id])->select();
        }else{
            $result = Address::where('user_id', $this->auth->id)->select();
        }
        $this->success('请求成功！', $result);
    }

    /**
     * 修改用户地址
     */
    public function updateUserAddress()
    {
        $addressID = $this->request->request('addressID');
        $params = $this->request->request();
        if (!$addressID) $this->error('缺少请求参数！');
        if ($params && !empty($params))
        {
            if ($params['default'] == 1) {
                $id = Address::where(['user_id'=>$this->auth->id, 'default'=>'1'])->value('id');
                Address::where(['user_id'=>$this->auth->id, 'id'=>$id])->update(['default'=>'0']);
            }
            try {
                $data['user_id'] = $this->auth->id;
                $data['province'] = $params['province']?:'';
                $data['city'] = $params['city']?:'';
                $data['area'] = $params['area']?:'';
                $data['address'] = $params['address']?:'';
                $data['default'] = $params['default']?:'0';
                $data['name'] = $params['name']?:'';
                $data['mobile'] = $params['mobile']?:'';
                $data['is_time'] = $params['is_time']?:0;
                $data['time_log'] = time();
                $result = Address::where(['id'=>$addressID, 'user_id'=>$this->auth->id])->update($data);
            } catch (Exception $e) {
                $this->error('请求失败！', $e->getMessage);
            }
            $this->success('请求成功！');  
        }
    }

    private function http($url, $method, $postfields = null, $headers = array(), $debug = false) {
        $ci = curl_init ();
        /* Curl settings */
        curl_setopt ( $ci, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1 );
        curl_setopt ( $ci, CURLOPT_CONNECTTIMEOUT, 30 );
        curl_setopt ( $ci, CURLOPT_SSL_VERIFYPEER, FALSE );
        curl_setopt ( $ci, CURLOPT_SSL_VERIFYHOST, FALSE );
        curl_setopt ( $ci, CURLOPT_TIMEOUT, 30 );
        curl_setopt ( $ci, CURLOPT_RETURNTRANSFER, true );

        switch ($method) {
            case 'POST' :
                curl_setopt ( $ci, CURLOPT_POST, true );
                if (! empty ( $postfields )) {
                    curl_setopt ( $ci, CURLOPT_POSTFIELDS, $postfields );
                    $this->postdata = $postfields;
                }
                break;
        }
        curl_setopt ( $ci, CURLOPT_URL, $url );
        curl_setopt ( $ci, CURLOPT_HTTPHEADER, $headers );
        curl_setopt ( $ci, CURLINFO_HEADER_OUT, true );

        $response = curl_exec ( $ci );
        $http_code = curl_getinfo ( $ci, CURLINFO_HTTP_CODE );

        if ($debug) {
            echo "=====post data======\r\n";
            var_dump ( $postfields );

            echo '=====info=====' . "\r\n";
            print_r ( curl_getinfo ( $ci ) );

            echo '=====$response=====' . "\r\n";
            print_r ( $response );
        }
        curl_close ( $ci );
        return array (
            $http_code,
            $response
        );
    }
}
