<?php


namespace app\api\controller;


use app\common\controller\Api;
use think\Exception;

class WxRefund extends Api
{
    public $appid = 'wxcebf3e4c3aebac0f';
    public $mch_id = '1605079432';
    public $key = 'q3NnfANoey3Q9UBdvQxewesVSJ8NuEaT';
    public $SSLCERT_PATH = 'cert/apiclient_cert.pem';
    public $SSLKEY_PATH = 'cert/apiclient_key.pem';
    protected $noNeedLogin = ['refund'];
    public function __construct($appid = null,$mch_id=null,$key=null,$SSLCERT_PATH=null,$SSLKEY_PATH=null)
    {
        $this->appid = $appid ?? $this->appid;
        $this->mch_id = $mch_id ?? $this->mch_id;
        $this->key = $key ??  $this->key;
        $this->SSLCERT_PATH = $SSLCERT_PATH ?? $this->SSLCERT_PATH;
        $this->SSLKEY_PATH = $SSLKEY_PATH ?? $this->SSLKEY_PATH;
    }
    //向外暴露的微信退款接口
    public function refund($order_no)
    {
        $order = \app\common\model\Order::where('order_no',$order_no)->find();
        $refund_no = date('Ymd') . str_pad(mt_rand(1, 99999), 5, '0', STR_PAD_LEFT);
        $result = $this->weChatrefund($refund_no,$order['transaction_no'],$order['real_price'],$order['real_price']);
        if($result['return_code'] == 'FAIL'){
            throw Exception($result['return_msg'],'500');
        }
        return $result;
    }

    private function weChatrefund($refund_no,$transaction_no,$total_fee,$refund_fee)
    {
        $param = [
            'appid'=> $this->appid,
            'mch_id'=> $this->mch_id,
            'nonce_str'=> $this->createNoncestr(),
            'out_refund_no'=> $refund_no,
            'transaction_id'=> $transaction_no,//微信订单号
//            'out_trade_no'=>$transaction_no,
            'total_fee'=> $total_fee*100,
            'refund_fee'=> $refund_fee*100,
        ];
        $param['sign'] = $this->getSign($param,$this->key);
        $xmldata = $this->arrayToXml($param);
        $xmlresult = $this->postXmlSSLCurl($xmldata,'https://api.mch.weixin.qq.com/secapi/pay/refund');
        $result = $this->xmlToArray($xmlresult);
        return $result;
    }
    /*
     * 对要发送到微信统一下单接口的数据进行签名
     */
    protected function getSign($params, $key)
    {
        ksort($params, SORT_STRING);
        $unSignParaString = $this->formatQueryParaMap($params, false);
        return $signStr = strtoupper(md5($unSignParaString . "&key=" . $key));
    }
    protected function formatQueryParaMap($paraMap, $urlEncode = false)
    {
        $buff = "";
        ksort($paraMap);
        foreach ($paraMap as $k => $v) {
            if (null != $v && "null" != $v) {
                if ($urlEncode) {
                    $v = urlencode($v);
                }
                $buff .= $k . "=" . $v . "&";
            }
        }
        $reqPar = '';
        if (strlen($buff) > 0) {
            $reqPar = substr($buff, 0, strlen($buff) - 1);
        }
        return $reqPar;
    }

    /*
     * 生成随机字符串方法
     */
    protected function createNoncestr($length = 32 ){
        $chars = "abcdefghijklmnopqrstuvwxyz0123456789";
        $str ="";
        for ( $i = 0; $i < $length; $i++ ) {
            $str.= substr($chars, mt_rand(0, strlen($chars)-1), 1);
        }
        return $str;
    }
//数组转字符串方法
    protected function arrayToXml($arr){
        $xml = "<xml>";
        foreach ($arr as $key=>$val)
        {
            if (is_numeric($val)){
                $xml.="<".$key.">".$val."</".$key.">";
            }else{
                $xml.="<".$key."><![CDATA[".$val."]]></".$key.">";
            }
        }
        $xml.="</xml>";
        return $xml;
    }

    protected static function xmlToArray($xml){
        $array_data = json_decode(json_encode(simplexml_load_string($xml, 'SimpleXMLElement', LIBXML_NOCDATA)), true);
        return $array_data;
    }

//需要使用证书的请求
    private function postXmlSSLCurl($xml,$url,$second=30)
    {
        $ch = curl_init();
        //超时时间
        curl_setopt($ch,CURLOPT_TIMEOUT,$second);
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,FALSE);
        curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,FALSE);
        //设置header
        curl_setopt($ch,CURLOPT_HEADER,FALSE);
        //要求结果为字符串且输出到屏幕上
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);
        //设置证书
        //使用证书：cert 与 key 分别属于两个.pem文件
        //默认格式为PEM，可以注释
        curl_setopt($ch,CURLOPT_SSLCERTTYPE,'PEM');

        curl_setopt($ch,CURLOPT_SSLCERT, realpath($this->SSLCERT_PATH));
        //默认格式为PEM，可以注释
        curl_setopt($ch,CURLOPT_SSLKEYTYPE,'PEM');
        curl_setopt($ch,CURLOPT_SSLKEY,realpath($this->SSLKEY_PATH));
        //post提交方式
        curl_setopt($ch,CURLOPT_POST, true);
        curl_setopt($ch,CURLOPT_POSTFIELDS,$xml);
        $data = curl_exec($ch);
        //返回结果
        if($data){
            curl_close($ch);
            return $data;
        }
        else {
            $error = curl_errno($ch);
            echo "curl出错，错误码:$error"."<br>";
            curl_close($ch);
            return false;
        }
    }
}