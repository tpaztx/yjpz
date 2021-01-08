<?php

namespace app\api\controller;

use app\common\controller\Api;
use app\common\exception\UploadException;
use app\common\library\Upload;
use app\common\model\Area;
use app\common\model\OrderGood;
use app\common\model\Version;
use fast\Random;
use think\Config;
use think\Hook;
use app\common\model\Config as Configs;
use com\vip\wpc\ospservice\vop\WpcVopOspServiceClient;
use Osp\Context\InvocationContextFactory;
use think\db;
use app\common\model\BrandList;
use app\common\model\GoodsList;
use think\Cache;
use think\Log;
use app\common\model\User;
use app\common\model\UserGroup;
use app\common\model\MoneyLog;
use app\common\model\Order;

/**
 * 公共接口
 */
class Common extends Api
{
    // protected $noNeedLogin = ['init','getStartImage','inputBrandList', 'inputGoodsList', 'protocol', 'delBrand', 'getConfig','orderStatus','returnOrderStatus','goodsOnline'];
    protected $noNeedLogin = '*';
    protected $noNeedRight = '*';

    /**
     * 加载初始化
     *
     * @param string $version 版本号
     * @param string $lng     经度
     * @param string $lat     纬度
     */
    public function init()
    {
        if ($version = $this->request->request('version')) {
            $lng = $this->request->request('lng');
            $lat = $this->request->request('lat');

            //配置信息
            $upload = Config::get('upload');
            //如果非服务端中转模式需要修改为中转
            if ($upload['storage'] != 'local' && isset($upload['uploadmode']) && $upload['uploadmode'] != 'server') {
                //临时修改上传模式为服务端中转
                set_addon_config($upload['storage'], ["uploadmode" => "server"], false);

                $upload = \app\common\model\Config::upload();
                // 上传信息配置后
                Hook::listen("upload_config_init", $upload);

                $upload = Config::set('upload', array_merge(Config::get('upload'), $upload));
            }

            $upload['cdnurl'] = $upload['cdnurl'] ? $upload['cdnurl'] : cdnurl('', true);
            $upload['uploadurl'] = preg_match("/^((?:[a-z]+:)?\/\/)(.*)/i", $upload['uploadurl']) ? $upload['uploadurl'] : url($upload['storage'] == 'local' ? '/api/common/upload' : $upload['uploadurl'], '', false, true);

            $content = [
                'citydata'    => Area::getCityFromLngLat($lng, $lat),
                'versiondata' => Version::check($version),
                'uploaddata'  => $upload,
                'coverdata'   => Config::get("cover"),
            ];
            $this->success('', $content);
        } else {
            $this->error(__('Invalid parameters'));
        }
    }

    /**
     * 上传文件
     * @ApiMethod (POST)
     * @param File $file 文件流
     */
    public function upload()
    {
        Config::set('default_return_type', 'json');
        //必须设定cdnurl为空,否则cdnurl函数计算错误
        Config::set('upload.cdnurl', '');
        $chunkid = $this->request->post("chunkid");
        if ($chunkid) {
            if (!Config::get('upload.chunking')) {
                $this->error(__('Chunk file disabled'));
            }
            $action = $this->request->post("action");
            $chunkindex = $this->request->post("chunkindex/d");
            $chunkcount = $this->request->post("chunkcount/d");
            $filename = $this->request->post("filename");
            $method = $this->request->method(true);
            if ($action == 'merge') {
                $attachment = null;
                //合并分片文件
                try {
                    $upload = new Upload();
                    $attachment = $upload->merge($chunkid, $chunkcount, $filename);
                } catch (UploadException $e) {
                    $this->error($e->getMessage());
                }
                $this->success(__('Uploaded successful'), ['url' => $attachment->url, 'fullurl' => cdnurl($attachment->url, true)]);
            } elseif ($method == 'clean') {
                //删除冗余的分片文件
                try {
                    $upload = new Upload();
                    $upload->clean($chunkid);
                } catch (UploadException $e) {
                    $this->error($e->getMessage());
                }
                $this->success();
            } else {
                //上传分片文件
                //默认普通上传文件
                $file = $this->request->file('file');
                try {
                    $upload = new Upload($file);
                    $upload->chunk($chunkid, $chunkindex, $chunkcount);
                } catch (UploadException $e) {
                    $this->error($e->getMessage());
                }
                $this->success();
            }
        } else {
            $attachment = null;
            //默认普通上传文件
            $file = $this->request->file('file');
            try {
                $upload = new Upload($file);
                $attachment = $upload->upload();
            } catch (UploadException $e) {
                $this->error($e->getMessage());
            }

            $this->success(__('Uploaded successful'), ['url' => $attachment->url, 'fullurl' => cdnurl($attachment->url, true)]);
        }
    }

    /**
     * 启动动画
     */
    public function getStartImage()
    {
        $data = Configs::where('name', 'start_animation')->value('value');
        return $this->success('请求成功！', $data);
    }

    /**
     * 定时拉取品牌信息
     */
    public function inputBrandList()
    {
        $pageIndex = $page_total = true;
        $page_total = $this->brandList();
        $data = [];
        if ($page_total) {
            $pageTotal = $page_total['pageTotal'];
        }
        //页数大于1的情况下循环请求获取数据
        if ($pageTotal && $pageTotal > 1) {
            $pageIndex = 1;
            Cache::set('brand_index', 1);
            do {
                try {
                    $list = $this->brandList('101101', Cache::get('brand_index'), 20);
                    if ($list)
                    {
                        $brandList = object_to_array($list['brandList']); 
                        foreach ($brandList as $k => $v)
                        {
                            //存储品牌信息
                            $adId = $v['adId'];
                            $band_info['adId'] = $adId;
                            $band_info['brandName'] = $v['brandName'];
                            $band_info['brandImage'] = $v['brandImage'];
                            $band_info['sellTimeFrom'] = $v['sellTimeFrom'];
                            $band_info['sellTimeTo'] = $v['sellTimeTo'];
                            $band_info['brandDesc'] = $v['brandDesc'];
                            $band_info['cateId'][] = $band_info['cateName'][] = '';
                            if (!empty($v['adCategoryList'])) {
                                foreach ($v['adCategoryList'] as $key => $val) {
                                    $band_info['cateId'][$key] = $val['cateId']?:'';
                                    $band_info['cateName'][$key] = $val['cateName']?:'';
                                }
                            }
                            if ($band_info['cateId'] && !empty($band_info['cateId'])) {
                                $band_info['cateId'] = implode(',', $band_info['cateId']);
                            }
                            if ($band_info['cateName'] && !empty($band_info['cateName'])) {
                                $band_info['cateName'] = implode(',', $band_info['cateName']);
                            }
                            $isHave = db('brand_list')->where('adId', $adId)->count('id');
                            if ($isHave>0) {
                                db('brand_list')->where('adId', $adId)->update($band_info);
                            }else{
                                db('brand_list')->insert($band_info);
                            }
                            unset($band_info);
                        }
                    }
                } catch(\Osp\Exception\OspException $e){
                    $this->error('请求失败，请联系管理员！');
                }
                Cache::set('brand_index', Cache::get('brand_index') + 1);
            } while (Cache::get('brand_index') <= $pageTotal);
            // $data = $this->second_array_unique_bykey($data, 'name');
        }
        $this->success('定时拉取品牌信息成功');
    }

    public function brandList($areaId = '101101', $page = 1, $pageSize = 20)
    {
        try {
            $service = WpcVopOspServiceClient::getService();
            $ctx = InvocationContextFactory::getInstance();
            $ctx->setAppKey(Config::get('wph.AppKey'));
            $ctx->setAppSecret(Config::get('wph.AppSecret'));
            $ctx->setAppURL("https://gw.vipapis.com/");
            $ctx->setLanguage("zh");
            $request1= new \com\vip\wpc\ospservice\vop\request\WpcBrandListRequest();
            $request1->areaId = $areaId;
            $request1->timestamp = time();
            $request1->vopChannelId = Config::get('wph.AppKey');
            $request1->userNumber = Config::get('wph.userNumber');
            $request1->page = $page;
            $request1->pageSize = $pageSize;
            $list = collection($service->getBrandList($request1))->toArray();
            if ($list) {
                // $this->success('请求成功！', $list);
                return $list;
            }
        } catch(\Osp\Exception\OspException $e){
            $this->error('请求失败，请联系管理员！');
        }
    }

    /**
     * 定时拉取商品信息
     */
    public function inputGoodsList()
    {
        $wph = new Wph;
        ignore_user_abort(true);
        set_time_limit(10);
        $goodStatus = $brandNum = true;
        //设置循环节点
        $brandNum = $this->request->param('brandNum');
        if(!$brandNum){
            if (Cache::get('brandNum')) {
                $brandNum = Cache::get('brandNum');
            }else{
                Cache::set('brandNum', 0);
                $brandNum = Cache::get('brandNum');
            }
            $adId = db('brand_list')->field('adId')->limit($brandNum, 1)->select();
        }else{
            $adId = db('brand_list')->field('adId')->where('adId', $brandNum)->select();
            Cache::set('goods_index', 1);
        }
        
        if ($adId && !empty($adId)) {
            foreach ($adId as $k => $v)
            {
                $pageTotal = false;
                $goodStatus = $this->goodsListWph('', 1, 20, $v['adId']);
                if ($goodStatus) { 
                    $pageTotal = $goodStatus['pageTotal'];//总页数
                }else{
                    Cache::set('brandNum', Cache::get('brandNum') + 1);
                    $this->success('adId不存在，或已下线');
                }
                if ($pageTotal && $pageTotal > 1)
                {
                    do {
                        $goods = $this->goodsListWph('', Cache::get('goods_index')?:1, 20, $v['adId']);
                        $goods = object_to_array($goods);
                        $isHave = 0;
                        foreach ($goods['goods'] as $key => $val) {
                            $goods_info['adId'] = $v['adId'];
                            $goods_info['goodId'] = $val['goodId'];
                            $goods_info['goodFullId'] = $val['goodFullId'];
                            $goods_info['goodImage'] = $val['goodImage'];
                            $goods_info['goodName'] = $val['goodName'];
                            $goods_info['logo'] = $val['logo'];
                            $goods_info['sn'] = $val['sn'];
                            $goods_info['isMp'] = $val['isMp']?1:0;
                            $goods_info['color'] = $val['color'];
                            $goods_info['material'] = $val['material'];
                            $goods_info['catNameOne'] = $val['catNameOne'];
                            $goods_info['catNameTwo'] = $val['catNameTwo'];
                            $goods_info['catNameThree'] = $val['catNameThree'];
                            $goods_info['catNameThree'] = $val['catNameThree'];
                            $goods_info['catNameThree'] = $val['catNameThree'];
                            //商品主图
                            $goods_info['goodBigImage'] = serialize($val['goodBigImage']);
                            //尺码文字
                            if (!empty($val['sizes'])) {
                                $goods_info['sizes_json'] = \GuzzleHttp\json_encode($val['sizes']);
                                $goods_info['vipshopPrice'] = $val['sizes'][0]['vipshopPrice'];
                                $goods_info['marketPrice'] = $val['sizes'][0]['marketPrice'];
                                $goods_info['commission'] = $val['sizes'][0]['commission'];
                                $goods_info['suggestAddPrice'] = $val['sizes'][0]['suggestAddPrice'];
                                $goods_info['suggestPrice'] = $val['sizes'][0]['suggestPrice'];
                            }
                            $isHave = db('goods_list')->where('goodId', $val['goodId'])->value('id');
                            if ($isHave>0) {
                                db('goods_list')->where('id', $isHave)->update($goods_info);
                            }else{
                                db('goods_list')->insert($goods_info);
                            }
                        }
                        Cache::set('goods_index', Cache::get('goods_index') + 1);
                        // echo '【执行类目ID】：'.$v['adId'].'【brandNum】：'.$brandNum.'【页数】：'.Cache::get('goods_index');
                    } while (Cache::get('goods_index') <= Cache::get('goods_total'));
                }
                Cache::set('goods_total', Cache::get('goods_index') + 10);
                Log::write('【执行类目ID】：'.$v['adId'].'【brandNum】：'.$brandNum.'【页数】：'.Cache::get('goods_index'));
                if (Cache::get('goods_index') >= $pageTotal) {
                    Cache::set('brandNum', Cache::get('brandNum') + 1);
                    Cache::set('goods_index', 1);
                    Cache::set('goods_total', 10);
                }
            }
            echo '【执行类目ID】：'.$v['adId'].'【brandNum】：'.$brandNum.'【页数】：'.Cache::get('goods_index');
        }else{
            Cache::set('brandNum', 0);
            $this->success('未获取到adId，或已下线，即将重新开始首位拉新！');
        }
    }

    /**
     * 查询待支付/待发货/已返货订单是否过期/发货/签收
     */
    public function orderStatus()
    {
        $page = Cache::get('page') ?? 1;
        $orders = \app\common\model\Order::whereIn('status',[0,1,2])->paginate(20,false,['page'=>$page]);
        if(!empty($orders)){
            Cache::set('page',$page+1);
            $OrderNoArray = [];
            foreach ($orders as $item){
                $OrderNoArray[] = $item['wph_order_no'];
            }
            if(empty($OrderNoArray)){
                Cache::set('page',1);
                $this->error('【无可查询订单】');
            }
            $OrderNoStr = implode(',',$OrderNoArray);
            $wph = new Wph();
            $list = $wph->orderStatus("$OrderNoStr");
            if(!empty($list)){
                // 启动事务
                Db::startTrans();
                try{
                foreach ($list as $value){
                     $order = \app\common\model\Order::where('wph_order_no',$value['parentOrderSn'])->find();
                    //将过期订单变为已取消状态
                    if($value['childOrderSnList'][0]['statusCode'] == 5){
                        $order->status = -1;
                        $order->updatetime = time();
                        $order->save();
                    }
                    //将已发货订单变为已发货状态
                    if($value['childOrderSnList'][0]['statusCode'] == 3){
                        $order->status = 2;
                        $order->updatetime = time();
                        $order->save();
                    }
                    //将已签收订单变为已完成状态 增加销量
                    if($value['childOrderSnList'][0]['statusCode'] == 7){
                        if($order->status != 3){
                            $order->status = 3;
                            $order->updatetime = time();
                            $order->save();
                            $orderGoods = OrderGood::where('order_id',$order['id'])->select();
                            if(!empty($orderGoods)){
                                foreach ($orderGoods as $good){
                                    $goods = GoodsList::where('goodId',$good['goodId'])->find();
                                    $goods->sales += $good['good_num'];
                                    $goods->save();
                                }
                            }
                        }
                    }
                }
                    // 提交事务
                    Db::commit();
                    $res = true;
                } catch (\Exception $e) {
                    // 回滚事务
                    Db::rollback();
                    $res = false;
                }
            }
            if($res){
                $this->success('共查询退货订单:'.count($orders).'当前页数:'.$page);
            }
            $this->error('服务器繁忙！');
        }else{
            Cache::set('page',1);
            $this->error('【无可查询订单】');
        }
    }

    /**
     * 查询退货订单状态
     */
    public function returnOrderStatus()
    {
        $orders = \app\common\model\Order::whereIn('after_sales',[1,3])->select();
        if(!empty($orders)){
            $wph = new Wph();
            $after_sales = 1;
            // 启动事务
            Db::startTrans();
            try{
                foreach ($orders as $item){
                    $row = $wph->returnOrderDetail($item['wph_order_no']);
                    if($row){
                        switch ($row['returnStatus']){
                            case '退货已审核':
                                $after_sales = 3;
                                break;
                            case '审核不通过':
                                $after_sales = 2;
                                break;
                            case '已退款':
                                $after_sales = 4;
                                break;
                        }
                        \app\common\model\Order::where('wph_order_no',$row['orderSn'])->update(['after_sales'=>$after_sales]);
                    }
                }
                // 提交事务
                Db::commit();
                $res = true;
            } catch (\Exception $e) {
                // 回滚事务
                Db::rollback();
                $res = false;
            }
            if($res){
                $this->success('共查询退货订单:'.count($orders));
            }
            $this->error('服务器繁忙！');
        }
        $this->success('无可查询订单！');
    }

    /**
     * 返回品牌对应的商品的数据
     */
    public function goodsListWph($areaId = '101101', $page = 1, $pageSize = 20, $adId = '')
    {
        try {
            $service = WpcVopOspServiceClient::getService();
            $ctx = InvocationContextFactory::getInstance();
            $ctx->setAppKey(Config::get('wph.AppKey'));
            $ctx->setAppSecret(Config::get('wph.AppSecret'));
            $ctx->setAppURL("https://gw.vipapis.com/");
            $ctx->setLanguage("zh");
            $request1 = new \com\vip\wpc\ospservice\vop\request\WpcGoodsListRequest();
            $request1->areaId = $areaId;
            $request1->timestamp = time();
            $request1->vopChannelId = Config::get('wph.AppKey');
            $request1->userNumber = Config::get('wph.userNumber');
            $request1->page = $page;
            $request1->pageSize = $pageSize;
            $request1->adId = $adId;
            $list = collection($service->getGoodsList($request1))->toArray();
            if ($list) {
                // $this->success('请求成功！', $list);
                return $list;
            }
        } catch(\Osp\Exception\OspException $e){
            // $this->error('请求失败，请联系管理员！');
            return false;
        }
    }

    /**
     * 获取协议说明相关内容
     */
    public function protocol()
    {
        $id = $this->request->request('id');
        if (!$id) $this->error('缺少请求协议ID！');
        $result = \app\common\model\Category::where('id', $id)->value('description');
        if ($result) {
            $this->success('请求成功！', $result);
        }

    }

    /**
     * 获取平台基础配置相关信息
     */
    public function getConfig()
    {
        $result['server_phone'] = Configs::where('name', 'in', 'server_phone')->value('value');
        $result['download_Android'] = Configs::where('name', 'in', 'download_Android')->value('value');
        $result['download_iOS'] = Configs::where('name', 'in', 'download_iOS')->value('value');
        $result['withdraw'] = Configs::where('name', 'in', 'withdraw')->value('value');
        $this->success('请求成功！', $result);
    }

    /**
     * 每月1号凌晨一点检测平台用户的等级信息
     */
    public function userGroupID()
    {
        $start = strtotime(date('Y-m-1',strtotime('last month')));
        $end = strtotime(date('Y-m-d',strtotime(date('Y-m-1').'-1 day')));
        $user = User::where('status', 'normal')->field('id')->select();
        $group = UserGroup::where(['status'=>'normal'])->where('id>1')->select();
        if ($user) {
            foreach ($user as $k => $v) {
                $real_price = \app\common\model\Order::where('user_id', $v['id'])->where("createtime >=".$start)
                                                                            ->where("createtime <=".$end)
                                                                            ->count('real_price');
                if ($real_price && $real_price>0) {
                    foreach ($group as $key => $val) {
                        if ($real_price >= $val['month']) {
                            User::where('id', $v['id'])->update('group_id', $val['id']);
                        }
                    }
                }
            }
        }
        echo "执行成功！";
    }

    /**
     * 定时查询订单返佣状态
     */
    public function orderCommission()
    {
        $time = strtotime('+7 day');
        $log = [];
        $order = Order::where('status',3)->whereTime('updatetime', '>=', $time)
                                        ->field('id,order_no,user_id,proportion,commission1,commission2,commission1_id,commission2_id')
                                        ->select();
                                        // echo Order::getLastSQL();die;
        if ($order && !empty($order)) {
            //添加收益记录
            foreach ($order as $key => $val) {
                //自购
                if ($val->proportion > 0) {
                    $this->addProportion($val);
                }
                //代购
                $this->addCommission($val);
                //增加用户余额
            }
        }
        $this->success('请求成功！');                                    
    }

    //自购佣金记录
    public function addProportion($data)
    {
        
        try {
            $user = User::get($data->user_id);
            $log = [
                'user_id'    => $data->user_id,
                'money'      => $data->proportion,
                'before'     => $user?$user['money']:0,
                'after'      => ($user?$user['money']:0) + $data->proportion,
                'memo'       => '购买商品返利',
                'createtime' => time(),
            ];
            $add_log = MoneyLog::insert($log);
            $user->money = $log['after'];
            $user->save();
        } catch (Exception $e) {
            Log::write($e->getMessage);
        }
    }
    //代购佣金记录
    public function addCommission($data)
    {
        //团长
        if ($data->commission1_id > 0) {
            try {
                $user1 = User::get($data->commission1_id);
                $log = [
                    'user_id'    => $user1->id,
                    'money'      => $data->commission1,
                    'before'     => $user1?$user1['money']:0,
                    'after'      => ($user1?$user1['money']:0) + $data->commission1,
                    'memo'       => '购买商品返利',
                    'createtime' => time(),
                ];
                $add_log = MoneyLog::insert($log);
                $user1->money = $log['after'];
                $user1->save();
            } catch (Exception $e) {
                Log::write($e->getMessage);
            }
        }
        //团员
        if ($data->commission2_id > 0) {
            try {
                $user2 = User::get($data->commission2_id);
                $log = [
                    'user_id'    => $user2->id,
                    'money'      => $data->commission2,
                    'before'     => $user2?$user2['money']:0,
                    'after'      => ($user2?$user2['money']:0) + $data->commission2,
                    'memo'       => '购买商品返利',
                    'createtime' => time(),
                ];
                $add_log = MoneyLog::insert($log);
                $user2->money = $log['after'];
                $user2->save();
            } catch (Exception $e) {
                Log::write($e->getMessage);
            }
        }
    }

    /**
     * 定时检测品牌失效性
     */
    public function delBrandStatus()
    {
        $brandAdId = $this->request->param('brandAdId');
        $brand_lists = $goods_list = $limitNum = 0;
        if(!$brandAdId){
            if (Cache::get('limitNum')) {
                $limitNum = Cache::get('limitNum');
            }else{
                Cache::set('limitNum', 1);
                $limitNum = Cache::get('limitNum');
            }
            $ids = BrandList::field('adId')->paginate(10, false, ['page'=>$limitNum]);
            foreach ($ids as $key => $val) {
                $result = $this->goodsListWph('', 1, 20, $val->adId);
                if (!$result) {
                    $brand_lists += db('brand_list')->where('adId', $val->adId)->delete();
                    $goods_list += db('goods_list')->where('adId', $val->adId)->delete();
                }
            }
            Cache::set('limitNum', Cache::get('limitNum')+1);
            $this->success('请求成功！【删除失效商品：'.$goods_list.'】【删除失效品牌：'.$brand_lists.'】【执行序列：'.$limitNum.'】');
        }else{
            $result = $this->goodsListWph('', 1, 20, $brandAdId);
            if (!$result) {
                $brand_lists = db('brand_list')->where('adId', $brandAdId)->delete();
                $goods_list = db('goods_list')->where('adId', $brandAdId)->delete();
            }
        }
        $this->success('请求成功！【删除失效商品：'.$goods_list.'】【删除失效品牌：'.$brand_lists.'】【执行序列：'.$brandAdId.'】');
    }
}
