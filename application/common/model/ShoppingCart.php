<?php


namespace app\common\model;


use think\Model;

class ShoppingCart extends Model
{
    // 表名
    protected $name = 'shopping_cart';

    public function goods()
    {
        $this->belongsTo('GoodsList','goodId','goodId');
    }
}