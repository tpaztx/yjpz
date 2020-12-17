<?php

namespace app\api\controller;

use app\common\controller\Api;
use app\common\exception\UploadException;
use app\common\library\Upload;
use app\common\model\Area;
use app\common\model\Version;
use fast\Random;
use think\Config;
use think\Hook;
use app\common\model\Config as Configs;
use com\vip\wpc\ospservice\vop\WpcVopOspServiceClient;
use Osp\Context\InvocationContextFactory;
use think\db;
use app\common\model\BrandList;
use think\Cache;
use think\Log;

/**
 * 公共接口
 */
class Common extends Api
{
    protected $noNeedLogin = ['init','getStartImage','inputBrandList', 'inputGoodsList'];
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
            Cookie::set('brand_index', 1);
            do {
                try {
                    $list = $this->brandList('101101', Cookie::get('brand_index'), 20);
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
                            
                            // $isHave = 0;
                            // //存储商品信息
                            // $goodsList = object_to_array($v['goods']);
                            // foreach ($goodsList as $keys => $vals) {
                            //     $goods_info['adId'] = $adId;
                            //     $goods_info['goodId'] = $vals['goodId'];
                            //     $goods_info['goodImage'] = $vals['goodImage'];
                            //     $goods_info['logo'] = $vals['logo'];
                            //     $goods_info['timelog'] = time();
                            //     $goods_info['cateId'] = $band_info['cateId'];
                            //     $isHave = db('goods_list')->where('goodId', $vals['goodId'])->value('id');
                            //     if ($isHave>0) {
                            //         db('goods_list')->where('id', $isHave)->update($goods_info);
                            //     }else{
                            //         db('goods_list')->insert($goods_info);
                            //     }
                            // }
                            unset($band_info);
                            // unset($goods_info); 
                        }

                    }
                } catch(\Osp\Exception\OspException $e){
                    $this->error('请求失败，请联系管理员！');
                }
                Cookie::set('brand_index', Cookie::get('brand_index') + 1);
            } while (Cookie::get('brand_index') <= $pageTotal);
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
        $brandListModel = new BrandList;
        $pageIndex = $page_total = $brandNum = $brandAdId = true;
        $data = [];
        //设置循环节点
        if (Cache::get('brandNum')) {
            $brandNum = Cache::get('brandNum');
        }else{
            Cache::set('brandNum', 0);
            $brandNum = Cache::get('brandNum');
        }
        $adId = db('brand_list')->field('id,adId,cateId')->limit($brandNum, 1)->select();
        if ($adId && !empty($adId)) {
            foreach ($adId as $k => $v)
            {
                $brandAdId = $v['adId'];
                $page_total = $this->goodsListWph('', 1, 20, $v['adId']);
                $pageTotal = false;
                if ($page_total) { 
                    $pageTotal = $page_total['pageTotal'];
                }else{
                    Cache::set('brandNum', 0);
                    $this->inputGoodsList();
                }
                if ($pageTotal && $pageTotal > 1)
                {
                    Cache::set('goods_index', 1);
                    do {
                        $goods = $this->goodsListWph('', Cache::get('goods_index'), 20, $v['adId']);
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
                            $goods_info['vipshopPrice'] = $val['sizes'][0]['vipshopPrice'];
                            $goods_info['marketPrice'] = $val['sizes'][0]['marketPrice'];
                            $goods_info['commission'] = $val['sizes'][0]['commission'];
                            $goods_info['isMp'] = $val['isMp']?1:0;
                            $goods_info['color'] = $val['color'];
                            $goods_info['material'] = $val['material'];
                            //尺码文字
                            foreach ($val['sizes'] as $keys => $vals) {
                                $goods_info['sizes_text'][$keys] = $vals['sizeName'];
                                $goods_info['sizes_text'] = implode($goods_info['sizes_text'], '、');
                            }
                            $isHave = db('goods_list')->where('goodId', $val['goodId'])->value('id');
                            if ($isHave>0) {
                                db('goods_list')->where('id', $isHave)->update($goods_info);
                            }else{
                                db('goods_list')->insert($goods_info);
                            }
                        }
                        Cache::set('goods_index', Cache::get('goods_index') + 1);
                    } while (Cache::get('goods_index') <= 10);
                }
                Log::write('【执行类目ID】：'.$v['adId'].'======【brandNum】：'.Cache::get('brandNum'));
                Cache::set('brandNum', Cache::get('brandNum') + 1);
            }
            echo '【执行类目ID】：'.$v['adId'].'======【brandNum】：'.Cache::get('brandNum');
        }else{
            Cache::set('brandNum', 0);
            $this->inputGoodsList();
        }
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
}
