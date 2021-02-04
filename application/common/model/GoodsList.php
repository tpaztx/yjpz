<?php

namespace app\common\model;

use think\Model;
use app\common\model\ShoppingCart;
use app\common\model\ShoppingCarts;
use app\admin\model\StoreDown;

/**
 * 邮箱验证码
 */
class GoodsList Extends Model
{

    // 开启自动写入时间戳字段
    protected $autoWriteTimestamp = 'int';
    // 定义时间戳字段名
    protected $createTime = 'createtime';
    protected $updateTime = false;
    // 追加属性
    protected $append = [
    ];

    public function brand()
    {
        return $this->belongsTo('BrandList','adId','adId');
    }
    public function getSizesJsonAttr($value)
    {
        if (!empty($value)) {
            $array = \GuzzleHttp\json_decode($value,1);
            if(!empty($array)){
                foreach ($array as &$item){
                    $item['sizeId'] = (string)$item['sizeId'];
                }
            }
            $value = $array;
        }
        return $value;
    }

    /**
     * 因为下架，删除指定商品的数据
     */
    public function delOffGoods($id)
    {
        if ($id) {
            $adId = self::where('goodFullId', $id)->value('adId');
            $goodId = self::where('goodFullId', $id)->value('goodId');
            self::where('goodFullId', $id)->delete();
            ShoppingCart::where('goodId', $goodId)->delete();
            ShoppingCarts::where('goodFullId', $id)->delete();
            StoreDown::where('ad_id', $adId)->delete();
        }
    }

}
