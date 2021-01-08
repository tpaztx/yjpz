<?php

namespace app\api\controller;

use app\common\controller\Api;
use addons\adszone\model\AdszoneAds;
use app\common\model\Address;
use app\common\model\Config;
use app\common\model\User;
use app\common\model\Order;
use app\common\model\OrderGood;
use app\common\model\GoodsList;
use app\common\model\brandName;
use Endroid\QrCode\QrCode;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;

/**
 * 首页接口
 */
class Index extends Api
{
    protected $noNeedLogin = ['*'];
    protected $noNeedRight = ['*'];

    /**
     * 首页 - 海报轮播
     */
    public function getBannnerList()
    {
        $result = AdszoneAds::create()->where('zone_id', 1)->field('id,imageurl,linkurl')->order('weigh')->select();
        $this->success('请求成功', $result);
    }

    /**
     * 新增用户收件地址
     */
    public function insertAddress()
    {
        $params = $this->request->request();
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
                $result = Address::insert($data);
                if ($result) {
                    $this->success('请求成功！');
                }
            } catch (Exception $e) {
                $this->error('请求失败！', $e->getMessage);
            }
        }
    }

    /**
     * 删除收货地址
     */
    public function delAddress()
    {
        $ids = $this->request->request('ids');
        if (!$ids) $this->error('缺少请求参数！');
        $result = Address::where('id', 'in', $ids)->delete();
        if ($result) {
            $this->success('请求成功！', $result);
        }
    }

    /**
     * 邀请海报
     */
    public function poster()
    {
        $code = User::where('id',$this->auth->id)->value('trade_code');
        $pic = Config::where('name', 'poster')->value('value');
        $result['myCode'] = $code;
        $result['image'] = $pic;
        //保存图片
        $api = 'http://www.baidu.com?trade_code='.$code;
        $url = "/qrcode_".$this->auth->id.".png";
        $pathname = APP_PATH . '../public/uploads/wxCode';
        if(!is_dir($pathname)) {
            mkdir($pathname);
        }
        $filename = $pathname . $url;
        if (!is_dir($filename)) {
            $wxCode = new QrCode($api);
            $wxCode->writeFile($filename);
        }
        $result['qrCode'] = '/uploads/wxCode'.$url;
        $this->success('请求成功！', $result);
    }

    /**
     * 获取系统消息列表
     */
    public function getSysNotice()
    {
        $result = \app\common\model\OrderNotice::where('user_id', $this->auth->id)->order('id desc')->select();
        $this->success('请求成功！', $result);
    }

    /**
     * 对账单-最近6个月时间
     */
    public function get6Month()
    {
        $first  = strtotime('first day this month');
        $months = array();
        for ($i = 6; $i >= 1; $i--) {
          array_push($months, date('Y-m', strtotime("-$i month", $first)));
        }
        $this->success('请求成功！', $months);
    }

    /**
     * 下载账单
     */
    public function downLoadBil()
    {
        $star = $this->request->request('star');
        $end = $this->request->request('end');
        $time = $this->request->request('time');

        if ($time) {
            $star = strtotime($time.' 00:00:00');
            $end = strtotime($time.' 23:59:59');
        }elseif ($star && $end) {
            $star = strtotime($star);
            $end = strtotime($end);
        }else{
            $this->error('缺少请求参数！');
        }

        $order = Order::whereTime('createtime', 'between', [$star, $end])->where('user_id',$this->auth->id)->field('id,order_no,username,phone,address,createtime,carriersCode,status,get_price')->select();
            foreach ($order as $k => $v) {
                $order_goods = OrderGood::where('order_id',$v->id)->field('goodId,good_title,good_price,good_size,good_num,return_num')->find();
                $sn = GoodsList::getFieldByGoodId('sn', $order_goods->goodId);
                $order[$k]['brandName'] = brandName::getFieldBySn('brandName', $sn);
                $order[$k]['goodId'] = $order_goods->goodId;
                $order[$k]['sn'] = $sn;
                $order[$k]['good_title'] = $order_goods->good_title;
                $order[$k]['good_size'] = $order_goods->good_size;
                $order[$k]['marketPrice'] = GoodsList::getFieldByGoodId('marketPrice', $order_goods->goodId);
                $order[$k]['good_price'] = $order_goods->good_price;
                $order[$k]['good_num'] = $order_goods->good_num;
                $order[$k]['createtime'] = datetime($order_goods->createtime);
                $order[$k]['return_num'] = $order_goods->return_num;
                if ($v->status == -1) {
                    $order[$k]['status'] = '已取消';
                }elseif ($v->status == 0) {
                    $order[$k]['status'] = '待支付';
                }elseif ($v->status == 1) {
                    $order[$k]['status'] = '待发货';
                }elseif ($v->status == 2) {
                    $order[$k]['status'] = '已发货';
                }elseif ($v->status == 3) {
                    $order[$k]['status'] = '已完成';
                }elseif ($v->status == 4) {
                    $order[$k]['status'] = '已退款';
                }
            }
            $this->handleExcel($order);
    }

    public function handleExcel($order)
    {
        //实例化Spreadsheet对象
        $spreadsheet = new Spreadsheet();
        //获取活动工作薄
        $sheet = $spreadsheet->getActiveSheet();
        //定义一个excel的header表头
        $header = ['A1'=>'品牌名','B1'=>'商品短ID','C1'=>'商品货号','D1'=>'商品标题','E1'=>'尺码','F1'=>'市场价','G1'=>'销售价','H1'=>'数量','I1'=>'下单时间','J1'=>'收货人','K1'=>'联系电话','L1'=>'详细地址','M1'=>'订单状态','N1'=>'订单号','O1'=>'退货数量','P1'=>'预估佣金'];
        foreach ($header as $key => $value) {
            $sheet->setCellValue($key, $value);
        }
        $i = 2;//excel表格从第2行开始填入数据
        foreach ($order as $k => $v) {
            $sheet->setCellValueByColumnAndRow(1,$i,$v['brandName']);
            $sheet->setCellValueByColumnAndRow(2,$i,$v['goodId']);
            $sheet->setCellValueByColumnAndRow(3,$i,$v['sn']);
            $sheet->setCellValueByColumnAndRow(4,$i,$v['good_title']);
            $sheet->setCellValueByColumnAndRow(5,$i,$v['good_size']);
            $sheet->setCellValueByColumnAndRow(5,$i,$v['marketPrice']);
            $sheet->setCellValueByColumnAndRow(5,$i,$v['good_price']);
            $sheet->setCellValueByColumnAndRow(5,$i,$v['good_num']);
            $sheet->setCellValueByColumnAndRow(5,$i,$v['createtime']);
            $sheet->setCellValueByColumnAndRow(5,$i,$v['username']);
            $sheet->setCellValueByColumnAndRow(5,$i,$v['phone']);
            $sheet->setCellValueByColumnAndRow(5,$i,$v['address']);
            $sheet->setCellValueByColumnAndRow(5,$i,$v['status']);
            $sheet->setCellValueByColumnAndRow(5,$i,$v['order_no']);
            $sheet->setCellValueByColumnAndRow(5,$i,$v['return_num']);
            $sheet->setCellValueByColumnAndRow(5,$i,$v['get_price']);
            $i++;//$i从2累加
        }
        //定义文件名称，需要带有定义的后缀名
        $filename = date('YmdHis').'.xls';
        ob_end_clean(); //清除缓冲区,避免乱码
        //将输出重定向到客户端的web浏览器
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');
        //如果浏览器为IE9
        header('Cache-Control: max-age=1');
        //如果通过SSL向IE提供服务
        header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
        header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT');
        header('Cache-Control: cache, must-revalidate');//HTTP/1.1
        header('Pragma: public');//HTTP/1.0
        $writer = IOFactory ::createWriter($spreadsheet, 'Xlsx');
        $writer -> save('php://output');
        exit;
    }
}
