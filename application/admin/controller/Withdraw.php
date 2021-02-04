<?php

namespace app\admin\controller;

use app\common\controller\Backend;
use fast\Random;
use think\Db;

define("APPID", "wxeac193915e8ff3fc"); // 商户账号appid
define("MCHID", "1605182717");      // 商户号
define("SECRECT_KEY", "nneGN80ocToUibFmzr9gubsKEQYb9C4N");  //支付密钥签名
/**
 * 提现申请管理
 *
 * @icon fa fa-circle-o
 */
class Withdraw extends Backend
{
    
    /**
     * Withdraw模型对象
     * @var \app\common\model\Withdraw
     */
    protected $model = null;
    protected $searchFields = 'order_no';

    public function _initialize()
    {
        parent::_initialize();
        $this->model = new \app\common\model\Withdraw;
        $this->view->assign("statusList", $this->model->getStatusList());
    }

    public function import()
    {
        parent::import();
    }

    /**
     * 默认生成的控制器所继承的父类中有index/add/edit/del/multi五个基础方法、destroy/restore/recyclebin三个回收站方法
     * 因此在当前控制器中可不用编写增删改查的代码,除非需要自己控制这部分逻辑
     * 需要将application/admin/library/traits/Backend.php中对应的方法复制到当前控制器,然后进行修改
     */
    

    /**
     * 查看
     */
    public function index()
    {
        //当前是否为关联查询
        $this->relationSearch = true;
        //设置过滤方法
        $this->request->filter(['strip_tags', 'trim']);
        if ($this->request->isAjax()) {
            //如果发送的来源是Selectpage，则转发到Selectpage
            if ($this->request->request('keyField')) {
                return $this->selectpage();
            }
            list($where, $sort, $order, $offset, $limit) = $this->buildparams();

            $list = $this->model
                    ->with(['user'])
                    ->where($where)
                    ->order($sort, $order)
                    ->paginate($limit);

            foreach ($list as $row) {
                
                $row->getRelation('user')->visible(['nickname','mobile']);
            }

            $result = array("total" => $list->total(), "rows" => $list->items());

            return json($result);
        }
        return $this->view->fetch();
    }

    /**
     * 编辑
     */
    public function edit($ids = null)
    {
        $row = $this->model->get($ids);
        if (!$row) {
            $this->error(__('No Results were found'));
        }
        $adminIds = $this->getDataLimitAdminIds();
        if (is_array($adminIds)) {
            if (!in_array($row[$this->dataLimitField], $adminIds)) {
                $this->error(__('You have no permission'));
            }
        }
        if ($this->request->isPost()) {
            $params = $this->request->post("row/a");
            if ($params) {
                $params = $this->preExcludeFields($params);
                //调用微信付款流程
                if ($params['status'] == '1') {
                    $this->sendMoney(floatval($params['price']), $params['openID'], $params['order_no'], '提现金额');
                }elseif ($params['status'] == '2') {
                    $this->returnMoney($params['money'], $params['user_id']);
                }
                $result = false;
                Db::startTrans();
                try {
                    //是否采用模型验证
                    if ($this->modelValidate) {
                        $name = str_replace("\\model\\", "\\validate\\", get_class($this->model));
                        $validate = is_bool($this->modelValidate) ? ($this->modelSceneValidate ? $name . '.edit' : $name) : $this->modelValidate;
                        $row->validateFailException(true)->validate($validate);
                    }
                    $result = $row->allowField(true)->save($params);
                    Db::commit();
                } catch (ValidateException $e) {
                    Db::rollback();
                    $this->error($e->getMessage());
                } catch (PDOException $e) {
                    Db::rollback();
                    $this->error($e->getMessage());
                } catch (Exception $e) {
                    Db::rollback();
                    $this->error($e->getMessage());
                }
                if ($result !== false) {
                    $this->success();
                } else {
                    $this->error(__('No rows were updated'));
                }
            }
            $this->error(__('Parameter %s can not be empty', ''));
        }
        $this->view->assign("row", $row);
        return $this->view->fetch();
    }

    /*
    $amount 发送的金额（分）目前发送金额不能少于1元
    $re_openid, 发送人的 openid
    $desc  //  企业付款描述信息 (必填)
    $check_name    收款用户姓名 (选填)
    $order_no 订单号
    */
    public function sendMoney($amount, $re_openid, $order_no, $desc='测试', $check_name='')
    {
        $total_amount = (100) * 0.01;
        $data = array(
            'mch_appid'=> APPID,//商户账号appid
            'mchid'=> MCHID,//商户号
            'nonce_str' => Random::alnum(12),//随机字符串
            'partner_trade_no'=> $order_no,//商户订单号
            'openid'=> $re_openid,//用户openid
            'check_name'=>'NO_CHECK',//校验用户姓名选项,
            're_user_name'=> $check_name,//收款用户姓名
            'amount'=>$total_amount,//金额
            'desc'=> $desc,//企业付款描述信息
            // 'spbill_create_ip'=> IP,//Ip地址
        );
        $secrect_key = SECRECT_KEY;///这个就是个API密码。MD5 32位。
        $data = array_filter($data);
        ksort($data);
        $str='';
        foreach($data as $k=>$v) {
           $str.=$k.'='.$v.'&';
        }
        $str.='key='.$secrect_key;
        $data['sign'] = md5($str);
        $xml = arraytoxml($data);
        $url = 'https://api.mch.weixin.qq.com/mmpaymkttransfers/promotion/transfers'; //调用接口
        $res = $this->httpPost($url, $xml);
        $return = xmltoarray($res);
        // dump($return);die;
        //返回来的结果
        // [return_code] => SUCCESS [return_msg] => Array ( ) [mch_appid] => wxd44b890e61f72c63 [mchid] => 1493475512 [nonce_str] => 616615516 [result_code] => SUCCESS [partner_trade_no] => 20186505080216815 
        // [payment_no] => 1000018361251805057502564679 [payment_time] => 2018-05-15 15:29:50
        if ($return && $return['return_code'] == 'SUCCESS') {
            if ($return['result_code'] == 'FAIL') {
                $this->error($return['err_code_des']);
            }
        }
        // $responseObj = simplexml_load_string($res, 'SimpleXMLElement', LIBXML_NOCDATA);
        // $res = $responseObj->return_code;  //SUCCESS  如果返回来SUCCESS,则发生成功，处理自己的逻辑
        return $res;
    }

    public function returnMoney($money, $uid)
    {
        $user = \app\common\model\User::get($uid);
        $data = [
            'user_id' => $uid,
            'money' => $money,
            'before' => $user->money,
            'after' => $user->money + $money,
            'memo' => '拒绝体现返回金额',
            'createtime' =>time(),
        ];
        try {
            \app\common\model\MoneyLog::insert($data);
            \app\common\model\User::where('id',$uid)->setInc('money',$money);
        } catch (Exception $e) {
            $this->error($e->getMessages);
        }
    }

    public function httpPost($url,$data){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_TIMEOUT, 500);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); 
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_SSLCERT, ROOT_PATH .'public/APPcert/apiclient_cert.pem'); //这个是证书的位置绝对路径
        curl_setopt($ch, CURLOPT_SSLKEY, ROOT_PATH .'public/APPcert/apiclient_key.pem'); //这个也是证书的位置绝对路径
        $output = curl_exec($ch);
        curl_close($ch);
        return $output;
    }
    
}
