<?php


namespace app\admin\model;


use think\Model;

class StoreDown extends Model
{
    // 表名
    protected $name = 'store_down';

    //获取门店下架品牌
    public function getDownId($store_id)
    {
        $list = $this->where('store_id',$store_id)->select();
        $array  = array();
        foreach ($list as $v){
            $array[] = $v['ad_id'];
        }
        return $array;
    }
}