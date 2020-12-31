<?php

namespace app\api\controller;

use app\common\controller\Api;
use app\common\model\Search as SearchKeyword;
use app\common\model\GoodsList;

/**
 * 示例接口
 */
class Search extends Api
{
 
    //如果$noNeedLogin为空表示所有接口都需要登录才能请求
    //如果$noNeedRight为空表示所有接口都需要验证权限才能请求000
    //如果接口已经设置无需登录,那也就无需鉴权了
    //
    // 无需登录的接口,*表示全部
    protected $noNeedLogin = ['test', 'test1'];
    // 无需鉴权的接口,*表示全部
    protected $noNeedRight = ['*'];

    /**
     * 客户端搜索
     * $star    从第几条数据开始处理分页数据 ++ 之后作为下次分页获取数据的起始点
     * $pageSize    每次返回的数据数量
     * price 0=从低到高1=从高到低
     * sale 0=从低到高1=从高到低000
     */
    public function searchs()
    {
        $pageIndex = $this->request->request('pageIndex')?:1;
        $pageSize = $this->request->request('pageSize')?:10;
        $price = $this->request->request('price')?:'';
        $sale = $this->request->request('sale')?:'';
        $adId = $this->request->request('adId')?:0;

        $order = 'id';
        if ($price !='') {
            $order = $price==1 ? 'vipshopPrice desc' : 'vipshopPrice';
        }
        $where = '1=1';
        if ($adId > 0) {
            $where = 'adId='.$adId;
        }
        // if ($sale !='') {
        //     $order = $sale==1 ? ''
        // }
        $keyWord = trim($this->request->request('keyWord'));
        if (!$keyWord) $this->error('请输入搜索内容！');
        $searchModel = new SearchKeyword;
        //插入用户搜索的历史记录
        $save_keyWord = $searchModel->insertKeyWord($this->auth->id, $keyWord);
        if (!$save_keyWord) {
            $this->error('处理搜索历史记录数据出错，请联系客服！');
        }
        $result = GoodsList::where("goodName like '%".$keyWord."%'")
                            ->where($where)
                            ->field('adId,goodId,goodFullId,goodName,color,material,sn,goodBigImage,vipshopPrice,marketPrice,commission')
                            ->order($order)
                            ->limit(($pageIndex - 1)*$pageSize, $pageSize)
                            ->select();
                            // dump(GoodsList::getLastSQL());die;
        if ($result) {
            if (empty($result)) {
                $this->success('未查询到数据结果！');
            }
            foreach ($result as $key => $val) {
                $result[$key]['goodBigImage'] = $val['goodBigImage']?unserialize($val['goodBigImage']):'';
            }
            $this->success('请求成功！', $result);
        }else{
            $this->success('未查询到数据结果！');
        }
    }

    public function search()
    {
        $page = $this->request->request('page')?:1;
        $pageSize = $this->request->request('pageSize')?:10;
        $price = $this->request->request('price');
        $total = $this->request->request('total');
        // $adId = $this->request->request('adId')?:0;
        // if ($adId == 0) $this->error('缺少请求参数商品ID！');
        $price_min = $this->request->request('price_min');
        $price_max = $this->request->request('price_max');
        $catNameOne = $this->request->request('catNameOne');
        $catNameTwo = $this->request->request('catNameTwo');
        $keyword = $this->request->request('keyword');
        
        $where = "1=1";
        if ($price_min && $price_max) {
            $where .= " and vipshopPrice between ".$price_min." and ".$price_max;
        }
        if ($catNameOne) {
            $where .= " and catNameOne in '".$catNameOne."'";
        }
        if ($catNameTwo) {
            $where .= " and catNameTwo in '".$catNameTwo."'";
        }
        if ($keyword) {
            $where .= " and goodName like '%".$keyword."%'";
        }
        // $brand_result = BrandList::where('adId', 'in', $adId)
                                    ->field('adId,brandName,brandImage,sellTimeTo,cateId,brandDesc')
                                    ->select();
        // if ($brand_result && !empty($brand_result)) {
            // foreach ($brand_result as $key => $val)
            // {
                // $where .= " and adId=".$val['adId'];
                // $brand_result[$key]['endTime'] = time2string(strtotime($val['sellTimeTo']) - time());
                $goods = GoodsList::where($where)->field('goodImage,goodId,goodFullId,goodName,sn,isMp,color,material,goodBigImage,vipshopPrice,marketPrice,commission,suggestAddPrice,suggestAddPrice,sizes_json')->limit(($page - 1)*$pageSize, $pageSize)->select();
                foreach ($goods as $k => $v) {
                    $goods[$k]['isFavorites'] = \app\common\model\Favorites::where(['user_id'=>$this->auth->id, 'goodId'=>$v->goodId])->find()?true:false;
                    $goods[$k]['goodBigImage'] = unserialize($v->goodBigImage);
                    $goods[$k]['vipshopPrice'] = $v->vipshopPrice + $v->suggestAddPrice;
                    $goods[$k]['total'] = \app\common\model\OrderGood::where('goodId', $v->goodId)->count('id');
                    // $goods[$k]['total'] = rand(0, 100);
                }
                if ($total) {
                    $goods = collection($goods)->toArray();
                    $goods = multi_array_sort($goods, 'total', ($total==1?SORT_DESC:SORT_ASC));
                }
                if ($price) {
                    $goods = collection($goods)->toArray();
                    $goods = multi_array_sort($goods, 'vipshopPrice', ($price==1?SORT_DESC:SORT_ASC));
                }
                
                // $brand_result[$key]['goods'] = $goods;
            // }
            $this->success('请求成功！', $goods);
        // }
        $this->error('请求失败！');
    }

    /**
     * 获取用户的搜索历史
     */
    public function searchLog()
    {
        $searchModel = new SearchKeyword;
        $result = $searchModel->searchLog($this->auth->id);
        $this->success('请求成功！', $result);
    }

    /**
     * 清空搜索历史记录
     */
    public function searchLogDel()
    {
        $searchModel = new SearchKeyword;
        $result = $searchModel->where('user_id', $this->auth->id)->delete();
        $this->success('请求成功！', $result);
    }
}
