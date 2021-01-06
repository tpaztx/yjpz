<?php

namespace app\api\controller;

use app\common\controller\Api;
use app\common\library\Ems;
use app\common\library\Sms;
use app\common\library\Token;
use app\common\model\JSSDK;
use app\common\model\Address;
use fast\Random;
use think\Db;
use think\Validate;
use think\Cache;
use app\common\model\User as UserM;
use function Qiniu\json_decode;
use function Symfony\Component\String\s;
use function Symfony\Component\String\u;
use app\common\model\Order;
use app\common\model\UserGroup;
use app\admin\model\Store;

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
        $this->success('请求成功！', [
            'nickname'   => $this->auth->nickname,
            'number'     => $this->auth->id,
            'avatar'     => $this->auth->avatar,
            'level'      => UserGroup::where('id', $this->auth->group_id)->value('name'),
            'commission' => UserGroup::where('id', $this->auth->group_id)->value('proportion').'%',
        ]);
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
            $userInfo = $this->auth->getUserinfo();
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

    /**
     * 我的零钱
     */
    public function myMoneyInfo()
    {
        $page = $this->request->request('page')?:1;
        $data['money'] = $this->auth->money?:0;
        $list = \app\common\model\MoneyLog::where('user_id', $this->auth->id)->order('id desc')->paginate(10, false, ['page'=>$page]);
        foreach ($list as $key => $val) {
            $list[$key]['money'] = $val->money>0?'+'.$val->money:'-'.$val->money;
        }
        $data['list'] = $list;
        $this->success('请求成功！', $data);
    }

    /**
     * 我的团队数据
     */
    public function getMyTeam()
    {
        $user = $this->auth->getUser();
        $teamId = $user->where('pid', $this->auth->trade_code)->column('id');
        $teamId2 = $this->getTeamLevel($this->auth->trade_code, 3, [], 0);
        if ($teamId2) {
            $teamId = array_merge($teamId, $teamId2['data']);
        }
        //今日平台奖励
        $today = Order::where(['user_id'=>$this->auth->id, 'status'=>3])->whereTime('updatetime', 'today')->sum('proportion');
        $today += Order::where(['commission1_id'=>$this->auth->id, 'status'=>3])->whereTime('updatetime', 'today')->sum('commission1');
        $today += Order::where(['commission2_id'=>$this->auth->id, 'status'=>3])->whereTime('updatetime', 'today')->sum('commission2');
        //今日团队销售
        $today_sale_price = Order::where(['status'=>3])->where('user_id', 'in', $teamId)->whereTime('createtime', 'today')->sum('real_price');
        //本月平台奖励
        $month = Order::where(['user_id'=>$this->auth->id, 'status'=>3])->whereTime('updatetime', 'month')->sum('proportion');
        $month += Order::where(['commission1_id'=>$this->auth->id, 'status'=>3])->whereTime('updatetime', 'month')->sum('commission1');
        $month += Order::where(['commission2_id'=>$this->auth->id, 'status'=>3])->whereTime('updatetime', 'month')->sum('commission2');
        //本月团队销售
        $month_sale_price = Order::where(['status'=>3])->where('user_id', 'in', $teamId)->whereTime('createtime', 'month')->sum('real_price');
        //个人累计奖励
        $my = Order::where(['user_id'=>$this->auth->id, 'status'=>3])->sum('proportion');
        $my += Order::where(['commission1_id'=>$this->auth->id, 'status'=>3])->sum('commission1');
        $my += Order::where(['commission2_id'=>$this->auth->id, 'status'=>3])->sum('commission2');
        //团队累计奖励
        $team = Order::where(['user_id'=>$this->auth->id, 'status'=>3])->sum('proportion');
        $team += Order::where(['commission1_id'=>$this->auth->id, 'status'=>3])->sum('commission1');
        $team += Order::where(['commission2_id'=>$this->auth->id, 'status'=>3])->sum('commission2');
        // echo Order::getLastSQL();die;
        $this->success('请求成功！', [
            'today' => $today,
            'today_sale_price' => $today_sale_price,
            'month' => $month,
            'month_sale_price' => $month_sale_price,
            'total' => $my + $team,
        ]);
    }

    /**
     * 我的团队数据
     */
    public function getMyTeamlist()
    {
        $page = $this->request->request('page')?:1;
        //团队集合
        $user = $this->auth->getUser();
        $teamId = $user->where('pid', $this->auth->trade_code)->column('id');
        $teamId2 = $this->getTeamLevel($this->auth->trade_code, 3, [], 0);
        if ($teamId2) {
            $teamId = array_merge($teamId, $teamId2['data']);
        }
        $data = [];
        $user = $user->where('id', 'in', $teamId)->field('nickname,avatar,id as number,createtime')->select();
        foreach ($user as $key => $val) {
            $list = db('store s')->where("s.user_id=".$val->number)
                                    ->join('order o', 'o.store_id=s.id')
                                    ->field('count(o.id ) as orderTotal, sum(real_price) as real_price')
                                    ->select();
            $user[$key]['orderTotal'] = $list[0]['orderTotal']?:0;
            $user[$key]['realPrice']  = $list[0]['real_price']?:0;
            $user[$key]['moneyTotal'] = $this->getUserMoneyTotal($val->number);
        }
        $this->success('请求成功！', $user);
    }

    //获取用户累计奖励
    private function getUserMoneyTotal($uid)
    {
        $my = Order::where(['user_id'=>$uid, 'status'=>3])->sum('proportion');
        $my += Order::where(['commission1_id'=>$uid, 'status'=>3])->sum('commission1');
        $my += Order::where(['commission2_id'=>$uid, 'status'=>3])->sum('commission2');
        return $my;
    }

    /**
     * 获取指定层级的团队集合
     * uid       string 上下级查询字段
     * level_num int    直推层级
     * uidArr    array  层级用户id集合
     * le        int    从0开始获取比对数据
     */
    private function getTeamLevel($uid, $level_num = 1, $uidArr = array(), $le = 0)
    {
        $memberModel = $this->auth->getUser();
        if (empty($uidArr)) {
            $teamList = $memberModel->where(['pid' => $uid])->column('trade_code');
        }else{
            $where = "0";
            foreach ($uidArr as $key => $val) {
                $where .= " or trade_code='".$val."'";
            }            
            $teamList = $memberModel->where($where)->column('id');
        }

        $level = $le;
        if ($teamList)
        {
            $level++;
            Cache::set($uid.'_ids', $teamList);
            if ($level == $level_num) {
                return ['level' => $level, 'data' => Cache::get($uid.'_ids')];
            }else{
                $data = $this->getTeamLevel($uid, $level_num, $teamList, $level);
                if($data['level'] == $level_num){
                    return $data;
                }
            }
        }else{
            return 0;
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
