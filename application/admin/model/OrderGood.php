<?php


namespace app\admin\model;


use think\Model;

class OrderGood extends Model
{
// 表名
    protected $name = 'order_good';
    // 开启自动写入时间戳字段
    protected $autoWriteTimestamp = 'int';
    // 定义时间戳字段名
    protected $createTime = false;
    protected $updateTime = false;
    // 追加属性
    protected $append = [

    ];
}