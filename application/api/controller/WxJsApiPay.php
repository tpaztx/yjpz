<?php
namespace app\common\model;

namespace app\api\controller;
use app\common\controller\Api;
use think\Db;

class WxJsApiPay extends Api
{

    /**
     * 默认支付参数配置,可以在这里配置,也可以在初始化的时候,统一传入参数
     * @var array
     */
    private $config = array(
        'appid'	=> 'wxcebf3e4c3aebac0f',
        'mch_id'=> '1605079432',
        'pay_apikey' => 'q3NnfANoey3Q9UBdvQxewesVSJ8NuEaT',
    );
    protected $noNeedLogin = ['notify'];

    public function __construct($config = array()){
        $this->config   =   array_merge($this->config,$config);
    }

    /**
     * 使用 $this->name=$value 	配置参数
     * @param  string $name 	配置名称
     * @param  string $value    配置值
     */
    public function __set($name,$value){
        if(isset($this->config[$name])) {
            $this->config[$name] = $value;
        }
    }

    /**
     * 使用 $this->name 获取配置
     * @param  string $name 配置名称
     * @return multitype    配置值
     */
    public function __get($name) {
        return $this->config[$name];
    }

    public function __isset($name){
        return isset($this->config[$name]);
    }
    /**
     * 微信支付请求接口(POST)
     * @param string $openid 	openid
     * @param string $body 		商品简单描述
     * @param string $order_sn  订单编号
     * @param string $total_fee 金额
     */
    public function wxJsApiPay($total_fee,$body,$order_sn,$openid){
        $config = $this->config;
        //统一下单参数构造
        $unifiedorder = array(
            'appid'			=> $config['appid'],
            'mch_id'		=> $config['mch_id'],
            'nonce_str'		=> self::getNonceStr(),
            'body'			=> $body,
            'out_trade_no'	=> $order_sn,
            'total_fee'		=> $total_fee * 100,
            'spbill_create_ip'	=> self::getip(),
            'notify_url'	=> "http://{$_SERVER['HTTP_HOST']}/api/wx_js_api_pay/notify",
            'trade_type'	=> 'JSAPI',
            'openid'		=> $openid
        );
        $unifiedorder['sign'] = self::makeSign($unifiedorder);

        //return $unifiedorder;

        //请求数据,统一下单
        $xmldata = self::array2xml($unifiedorder);
        $url = 'https://api.mch.weixin.qq.com/pay/unifiedorder';
        $res = self::curl_post_ssl($url, $xmldata);
        if(!$res){
            return array('status'=>0, 'msg'=>"Can't connect the server" );
        }
        // 这句file_put_contents是用来查看服务器返回的结果 测试完可以删除了
        //file_put_contents('./log.txt',$res,FILE_APPEND);

        $content = self::xml2array($res);
        if(strval($content['result_code']) == 'FAIL'){
            return array('status'=>0, 'msg'=>strval($content['err_code']).':'.strval($content['err_code_des']));
        }
        if(strval($content['return_code']) == 'FAIL'){
            return array('status'=>0, 'msg'=>strval($content['return_msg']));
        }

        $time = time();
        settype($time, "string");  		//jsapi支付界面,时间戳必须为字符串格式
        $resdata = array(
            'appId'      	=> strval($content['appid']),
            'nonceStr'      => strval($content['nonce_str']),
            'package'       => 'prepay_id='.strval($content['prepay_id']),
            'signType'		=> 'MD5',
            'timeStamp'		=> $time
        );
        $resdata['paySign'] = self::makeSign($resdata);

        return $resdata;
    }

    public function notify()
    {
        $xml = file_get_contents("php://input");		//获取微信支付服务器返回的数据

//        测试返回数据
        file_put_contents('jsapi_pay.txt',$xml,FILE_APPEND);


        //将服务器返回的XML数据转化为数组
        $data = $this->xml2array($xml);
        // 保存微信服务器返回的签名sign
        $data_sign = $data['sign'];
        // sign不参与签名算法
        unset($data['sign']);
        $sign = $this->makeSign($data);
        // 判断签名是否正确  判断支付状态
        if ( ($sign===$data_sign) && ($data['return_code']=='SUCCESS') && ($data['result_code']=='SUCCESS') ) {
            $result = $data;

            //获取服务器返回的数据
            $order_sn = $data['out_trade_no'];			//订单单号
            $openid = $data['openid'];					//付款人openID
            $total_fee = $data['total_fee']/100;			//付款金额
            $transaction_id = $data['transaction_id']; 	//微信支付流水号
            // 启动事务
            Db::startTrans();
            try{

                // 提交事务
                Db::commit();
            } catch (\Exception $e) {
                // 回滚事务
                Db::rollback();
            }
        }else{
            $result = false;
        }
        // 返回状态给微信服务器
        if ($result) {
            $str='<xml><return_code><![CDATA[SUCCESS]]></return_code><return_msg><![CDATA[OK]]></return_msg></xml>';
        }else{
            $str='<xml><return_code><![CDATA[FAIL]]></return_code><return_msg><![CDATA[签名失败]]></return_msg></xml>';
        }
        echo $str;
        return $result;
    }

    public function wxAppPay($total_fee,$body,$order_sn){
        $config = $this->config;
        //统一下单参数构造
        $unifiedorder = array(
            'appid'			=> $config['appid'],
            'mch_id'		=> $config['mch_id'],
            'nonce_str'		=> self::getNonceStr(),
            'body'			=> $body,
            'out_trade_no'	=> $order_sn,
            'total_fee'		=> $total_fee * 100,
            'spbill_create_ip'	=> self::getip(),
            'notify_url'	=> "http://{$_SERVER['HTTP_HOST']}/api/wx_js_api_pay/App_notify",
            'trade_type'	=> 'APP',
        );
        $unifiedorder['sign'] = self::makeSign($unifiedorder);

        //return $unifiedorder;

        //请求数据,统一下单
        $xmldata = self::array2xml($unifiedorder);
        $url = 'https://api.mch.weixin.qq.com/pay/unifiedorder';
        $res = self::curl_post_ssl($url, $xmldata);
        if(!$res){
            return array('status'=>0, 'msg'=>"Can't connect the server" );
        }
        // 这句file_put_contents是用来查看服务器返回的结果 测试完可以删除了
        //file_put_contents('./log.txt',$res,FILE_APPEND);

        $content = self::xml2array($res);
        if(strval($content['result_code']) == 'FAIL'){
            return array('status'=>0, 'msg'=>strval($content['err_code']).':'.strval($content['err_code_des']));
        }
        if(strval($content['return_code']) == 'FAIL'){
            return array('status'=>0, 'msg'=>strval($content['return_msg']));
        }

        $time = time();
        settype($time, "string");  		//jsapi支付界面,时间戳必须为字符串格式
        $resdata = array(
            'appId'      	=> strval($content['appid']),
            'partnerid'      	=> strval($content['mch_id']),
            'prepayid'      	=> strval($content['prepay_id']),
            'nonceStr'      => strval($content['nonce_str']),
            'package'       => 'prepay_id='.strval($content['prepay_id']),
            'signType'		=> 'MD5',
            'timeStamp'		=> $time
        );
        $resdata['paySign'] = self::makeSign($resdata);

        return $resdata;
    }

    public function App_notify()
    {
        $xml = file_get_contents("php://input");		//获取微信支付服务器返回的数据

//        测试返回数据
        file_put_contents('log_app_pay.txt',$xml,FILE_APPEND);


        //将服务器返回的XML数据转化为数组
        $data = $this->xml2array($xml);
        // 保存微信服务器返回的签名sign
        $data_sign = $data['sign'];
        // sign不参与签名算法
        unset($data['sign']);
        $sign = $this->makeSign($data);
        // 判断签名是否正确  判断支付状态
        if ( ($sign===$data_sign) && ($data['return_code']=='SUCCESS') && ($data['result_code']=='SUCCESS') ) {
            $result = $data;

            //获取服务器返回的数据
            $order_sn = $data['out_trade_no'];			//订单单号
            $openid = $data['openid'];					//付款人openID
            $total_fee = $data['total_fee']/100;			//付款金额
            $transaction_id = $data['transaction_id']; 	//微信支付流水号


            // 启动事务
            Db::startTrans();
            try{

                // 提交事务
                Db::commit();
            } catch (\Exception $e) {
                // 回滚事务
                Db::rollback();
            }
        }else{
            $result = false;
        }
        // 返回状态给微信服务器
        if ($result) {
            $str='<xml><return_code><![CDATA[SUCCESS]]></return_code><return_msg><![CDATA[OK]]></return_msg></xml>';
        }else{
            $str='<xml><return_code><![CDATA[FAIL]]></return_code><return_msg><![CDATA[签名失败]]></return_msg></xml>';
        }
        echo $str;
        return $result;
    }
    /**
     * 数组转换为XML
     * @param array $arr 要转换的数组
     * @param int $level 节点层级, 1 为 Root.
     * @return string XML 结构的字符串
     */
    protected function array2xml($arr, $level = 1) {
        $s = $level == 1 ? "<xml>" : '';
        foreach($arr as $tagname => $value) {
            if (is_numeric($tagname)) {
                $tagname = $value['TagName'];
                unset($value['TagName']);
            }
            if(!is_array($value)) {
                $s .= "<{$tagname}>".(!is_numeric($value) ? '<![CDATA[' : '').$value.(!is_numeric($value) ? ']]>' : '')."</{$tagname}>";
            } else {
                $s .= "<{$tagname}>" . $this->array2xml($value, $level + 1)."</{$tagname}>";
            }
        }
        $s = preg_replace("/([\x01-\x08\x0b-\x0c\x0e-\x1f])+/", ' ', $s);
        return $level == 1 ? $s."</xml>" : $s;
    }

    /**
     * 将xml转为array
     * @param  string 	$xml xml字符串
     * @return array    转换得到的数组
     */
    protected function xml2array($xml){
        //禁止引用外部xml实体
        libxml_disable_entity_loader(true);
        $result= json_decode(json_encode(simplexml_load_string($xml, 'SimpleXMLElement', LIBXML_NOCDATA)), true);
        return $result;
    }

    /**
     *
     * 产生随机字符串，不长于32位
     * @param int $length
     * @return 产生的随机字符串
     */
    protected function getNonceStr($length = 32) {
        $chars = "abcdefghijklmnopqrstuvwxyz0123456789";
        $str ="";
        for ( $i = 0; $i < $length; $i++ )  {
            $str .= substr($chars, mt_rand(0, strlen($chars)-1), 1);
        }
        return $str;
    }

    /**
     * 生成签名
     * @return 签名
     */
    protected function makeSign($data){
        //获取微信支付秘钥
        $key = $this->config['pay_apikey'];
        // 去空
        $data=array_filter($data);
        //签名步骤一：按字典序排序参数
        ksort($data);
        $string_a=http_build_query($data);
        $string_a=urldecode($string_a);
        //签名步骤二：在string后加入KEY
        $string_sign_temp=$string_a."&key=".$key;
        //签名步骤三：MD5加密
        $sign = md5($string_sign_temp);
        // 签名步骤四：所有字符转为大写
        $result=strtoupper($sign);

        return $result;
    }

    /**
     * 获取IP地址
     * @return [String] [ip地址]
     */
    protected function getip() {
        static $ip = '';
        $ip = $_SERVER['REMOTE_ADDR'];
        if(isset($_SERVER['HTTP_CDN_SRC_IP'])) {
            $ip = $_SERVER['HTTP_CDN_SRC_IP'];
        } elseif (isset($_SERVER['HTTP_CLIENT_IP']) && preg_match('/^([0-9]{1,3}\.){3}[0-9]{1,3}$/', $_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif(isset($_SERVER['HTTP_X_FORWARDED_FOR']) AND preg_match_all('#\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}#s', $_SERVER['HTTP_X_FORWARDED_FOR'], $matches)) {
            foreach ($matches[0] AS $xip) {
                if (!preg_match('#^(10|172\.16|192\.168)\.#', $xip)) {
                    $ip = $xip;
                    break;
                }
            }
        }
        return $ip;
    }

    /**
     * 微信支付发起请求
     */
    protected function curl_post_ssl($url, $xmldata, $second=30,$aHeader=array()){
        $config = $this->config;

        $ch = curl_init();
        //超时时间
        curl_setopt($ch,CURLOPT_TIMEOUT,$second);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
        //这里设置代理，如果有的话
        //curl_setopt($ch,CURLOPT_PROXY, '10.206.30.98');
        //curl_setopt($ch,CURLOPT_PROXYPORT, 8080);
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
        curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,0);
        curl_setopt($ch, CURLOPT_SSLVERSION, 1);

        //默认格式为PEM
//        curl_setopt($ch,CURLOPT_SSLCERTTYPE,'PEM');
//        curl_setopt($ch,CURLOPT_SSLCERT,$config['api_cert']);
//        //默认格式为PEM
//        curl_setopt($ch,CURLOPT_SSLKEYTYPE,'PEM');
//        curl_setopt($ch,CURLOPT_SSLKEY,$config['api_key']);

        //curl_setopt($ch,CURLOPT_CAINFO,$config['rootca']);

        if( count($aHeader) >= 1 ){
            curl_setopt($ch, CURLOPT_HTTPHEADER, $aHeader);
        }

        curl_setopt($ch,CURLOPT_POST, true);
        curl_setopt($ch,CURLOPT_POSTFIELDS,$xmldata);
        $data = curl_exec($ch);
        if($data){
            curl_close($ch);
            return $data;
        }else {
            $error = curl_errno($ch);
            echo "call faild, errorCode:$error\n";
            curl_close($ch);
            return false;
        }
    }
}