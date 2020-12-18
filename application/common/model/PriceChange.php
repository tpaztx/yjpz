<?php


namespace app\common\model;


use think\Model;

class PriceChange extends Model
{
    //改价模型

    // 表名
    protected $name = 'price_change';
    // 开启自动写入时间戳字段
    protected $autoWriteTimestamp = 'int';
    // 定义时间戳字段名
    protected $createTime = 'createtime';
    protected $updateTime = 'updatetime';
    // 追加属性
    protected $append = [
    ];
}