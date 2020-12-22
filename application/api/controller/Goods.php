<?php

namespace app\api\controller;

use app\common\controller\Api;
use app\common\model\PriceChange;
use app\common\model\Search as SearchKeyword;
use app\common\model\GoodsList;
use app\common\model\BrandList;
use app\api\controller\Wph;
use com\vip\wpc\ospservice\vop\WpcVopOspServiceClient;
use Osp\Context\InvocationContextFactory;

/**
 * 商品相关
 */
class Goods extends Api
{
 
    //如果$noNeedLogin为空表示所有接口都需要登录才能请求
    //如果$noNeedRight为空表示所有接口都需要验证权限才能请求
    //如果接口已经设置无需登录,那也就无需鉴权了
    //
    // 无需登录的接口,*表示全部
    protected $noNeedLogin = ['test', 'test1'];
    // 无需鉴权的接口,*表示全部
    protected $noNeedRight = ['*'];

    public function getGoodsSize()
    {
        $goodFullId = $this->request->request('goodFullId')?:0;
        if ($goodFullId) {
            $wph = new Wph;
            $result;
            $goods = $wph->goodsDetailWph('101101', $goodFullId);
            if ($goods && !empty($goods)) {
                foreach ($goods as $key => $value) {
                    $result = $value->sizeTableJson;
                }
                $this->success('请求成功！', $result);
            }else{
                $this->error('查询商品信息异常！');
            }
        }else{
            $this->error('缺少请求参数商品ID！');
        }
    }

    /**
     * 品牌详情
     * adId 广告ID
     */
    public function getBrandInfo()
    {
        $page = $this->request->request('page')?:1;
        $pageSize = $this->request->request('pageSize')?:10;
        $adId = $this->request->request('adId')?:0;
        if ($adId == 0) $this->error('缺少请求参数商品ID！');

        $brand_result = BrandList::where('adId', 'in', $adId)
                                    ->field('adId,brandName,brandImage,sellTimeTo,cateId,brandDesc')
                                    ->limit(($page - 1)*$pageSize, $pageSize)
                                    ->select();
        if ($brand_result && !empty($brand_result)) {
            foreach ($brand_result as $key => $val)
            {
                $brand_result[$key]['endTime'] = time2string(strtotime($val['sellTimeTo']) - time());
                $goods = GoodsList::where('adId', $val['adId'])->field('goodImage,goodId,goodName,sn,vipshopPrice,marketPrice,isMp,commission,color,material,sizes_text,goodBigImage,suggestAddPrice,suggestPrice')->select();
                $brand_result[$key]['goods'] = $goods;
            }
            $this->success('请求成功！', $brand_result);
        }
        $this->error('请求失败！');
    }

    /**
     * 商品详情
     */
    public function goodShow()
    {
        $goodId  = $this->request->param('goodId');
        $user = $this->auth->getUser();
        $storeM = new \app\admin\model\Store();
        $store=$storeM->getStore($user['id']);
        $good = GoodsList::with(['brand'=>function($query){
            $query->field('adId,brandName,sellTimeTo,brandImage');
        }])->where('goodId',$goodId)->find();
        $changePrice = new PriceChange();
        $good = $changePrice->changePrice($store['id'],$good);
        $good['goodBigImage'] = unserialize($good['goodBigImage']);
        $good['brand']['sellTimeTo'] = strtotime($good['brand']['sellTimeTo']);
        if($good['brand']['sellTimeTo'] > time()){
            $good['brand']['sellTimeTo'] = ceil(($good['brand']['sellTimeTo']-time())/86400);
        }else{
            $good['brand']['sellTimeTo'] = '已超过选购时间！';
        }
        if(!$good){
            $this->error('服务器繁忙！');
        }
        $this->success('请求成功！',$good);
    }


    /**
     * 图文详情
     */
    public function getGoodsDesc()
    {
        $goodFullId = $this->request->request('goodFullId')?:0;
        if ($goodFullId==0) $this->error('缺少请求参数商品ID！');
        try {
            $service = WpcVopOspServiceClient::getService();
            $ctx = InvocationContextFactory::getInstance();
            $ctx->setAppKey(Config::get('wph.AppKey'));
            $ctx->setAppSecret(Config::get('wph.AppSecret'));
            $ctx->setAppURL("https://gw.vipapis.com/");
            $ctx->setLanguage("zh");
            $request1 = new \com\vip\wpc\ospservice\vop\request\WpcGoodsDetailRequest();
            $request1->areaId = '101101';
            $request1->timestamp = time();
            $request1->vopChannelId = Config::get('wph.AppKey');
            $request1->userNumber = Config::get('wph.userNumber');
            $request1->goodFullIds = $goodFullId;
            $list = collection($service->getGoodsDetail($request1))->toArray();
            if ($list) {
                $this->success('请求成功！', $list);
            }
        } catch(\Osp\Exception\OspException $e){
            $this->error('请求失败，请联系管理员！');
        }
    }
}
