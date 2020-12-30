<?php
namespace app\common\model;
use think\Model;

class ShoppingCarts extends Model
{
    // 表名
    protected $name = 'shopping_carts';
    // 定义时间戳字段名
    protected $createTime = 'createtime';
    protected $updateTime = false;
    // 追加属性
    protected $append = [
    ];
}