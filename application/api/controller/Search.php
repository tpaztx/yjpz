<?php

namespace app\api\controller;

use app\common\controller\Api;
use app\common\model\Search as SearchKeyword;
use app\common\model\GoodsList;
use app\common\model\UserGroup;

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
        // if ($sale !='') {
        //     $order = $sale==1 ? ''
        // }
        $keyWord = trim($this->request->request('keyWord'));
        dump($keyWord);exit;
        if (!$keyWord) $this->error('请输入搜索内容！');
        $searchModel = new SearchKeyword;
        //插入用户搜索的历史记录
        $save_keyWord = $searchModel->insertKeyWord($this->auth->id, $keyWord);
        if (!$save_keyWord) {
            $this->error('处理搜索历史记录数据出错，请联系客服！');
        }
        $result = GoodsList::where(function ($query) use ($keyWord,$adId){
                                if(isset($keyWord) && !empty($keyWord)){
                                    $query->where('goodName','like','%'.$keyWord.'%');
                                }
                                if(isset($adId) && !empty($adId)){
                                    $query->where('adId',$adId);
                                }
                            })
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
        $price_min = $this->request->request('price_min');
        $price_max = $this->request->request('price_max');
        $catNameOne = $this->request->request('catNameOne');
        $catNameTwo = $this->request->request('catNameTwo');
        $keyword = $this->request->request('keyword');
        if(!isset($keyword) || empty($keyword)){
            $this->error('请输入搜索内容！');
        }
        //插入用户搜索的历史记录 
        $searchModel = new SearchKeyword;
        $save_keyWord = $searchModel->insertKeyWord($this->auth->id, $keyword);
        if (!$save_keyWord) {
            $this->error('处理搜索历史记录数据出错，请联系客服！');
        }
        $order = '';
        // if (isset($total)) {
        //     $order = 'total '. ($total==1 ? 'DESC' : 'ASC');
        // }
        if (isset($price)) {
            $order = 'g.suggestPrice '. ($price==1 ? 'DESC' : 'ASC');
        }
        $goods = GoodsList::alias('g')->where(function ($query) use ($price_min, $price_max, $catNameOne, $catNameTwo, $keyword){
                    if($keyword){
                        $query->where('g.goodName','like','%'.$keyword.'%');
                    }
                    if($price_min){
                        $query->where('g.suggestPrice','>=',$price_min);
                    }
                    if($price_max){
                        $query->where('g.suggestPrice','<=',$price_max);
                    }
                    if($catNameOne){
                        $query->where('g.catNameOne',$catNameOne);
                    }
                    if($catNameTwo){
                        $query->where('g.catNameTwo',$catNameTwo);
                    }
                })->join('order_good o', 'g.goodId=g.goodId', 'left')->field('g.goodImage,g.goodId,g.goodFullId,g.goodName,g.sn,g.isMp,g.color,g.material,g.goodBigImage,g.vipshopPrice,g.marketPrice,g.commission,g.suggestAddPrice,g.suggestPrice,g.sizes_json')->order($order)->limit(($page - 1)*$pageSize, $pageSize)->select();
        // echo GoodsList::getLastSQL();die;
        if(!empty($goods)){
            foreach ($goods as $k => $v) {
                $goods[$k]['isFavorites'] = \app\common\model\Favorites::where(['user_id'=>$this->auth->id, 'goodId'=>$v->goodId])->find()?true:false;
                $goods[$k]['goodBigImage'] = unserialize($v->goodBigImage);
                if ($v->isMp == 1) {
                    $goods[$k]['suggestAddPrice'] = round($v->suggestAddPrice * (UserGroup::where('id', $this->auth->group_id)->value('proportion')) * 0.01, 2);
                    $goods[$k]['suggestPrice'] = $v->suggestPrice + $goods[$k]['suggestAddPrice'];
                }else{
                    $goods[$k]['commission'] = round($v->commission * (UserGroup::where('id', $this->auth->group_id)->value('proportion')) * 0.01, 2);
                    $goods[$k]['suggestPrice'] = $v->suggestPrice + $goods[$k]['commission'];
                }
                $goods[$k]['total'] = \app\common\model\OrderGood::where('goodId', $v->goodId)->count('id');
            }
            if ($total) {
                $goods = collection($goods)->toArray();
                $goods = multi_array_sort($goods, 'total', ($total==1?SORT_DESC:SORT_ASC));
            }
            // if ($price) {
            //     $goods = collection($goods)->toArray();
            //     $goods = multi_array_sort($goods, 'vipshopPrice', ($price==1?SORT_DESC:SORT_ASC));
            // }
        }
        if(empty($goods)){
            $this->error('未搜索到对应内容！');
        }
        $this->success('请求成功！', $goods);
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
