<?php


namespace app\admin\model;


use think\Model;

class Order extends Model
{
    // 表名
    protected $name = 'order';
    // 开启自动写入时间戳字段
    protected $autoWriteTimestamp = 'int';
    // 定义时间戳字段名
    protected $createTime = 'createtime';
    protected $updateTime = 'updatetime';
    // 追加属性
    protected $append = [
        'status_text',
        'after_sales_text',
        'createtime_text',
        'updatetime_text',
    ];
    public function getStatusTextAttr($value,$data)
    {
        $status = [-1=>'已取消',0=>'待付款',1=>'待发货',2=>'已发货',3=>"已完成",4=>"已退款",5=>'已签收'];
        return $status[$data['status']];
    }
    public function getAfterSalesTextAttr($value,$data)
    {
        $after_sales = [0=>'无售后',1=>'审核中',2=>'未通过',3=>"已通过",4=>"已退款",5 =>"已完成"];
        return $after_sales[$data['after_sales']];
    }
    public function getCreatetimeTextAttr($value, $data)
    {
        $value = $value ? $value : $data['createtime']?:"";
        return is_numeric($value) ? date("Y-m-d H:i:s", $value) : $value;
    }
    public function getUpdatetimeTextAttr($value, $data)
    {
        $value = $value ? $value : $data['updatetime'];
        return is_numeric($value) ? date("Y-m-d H:i:s", $value) : $value;
    }

    public function goods()
    {
        return $this->hasMany('OrderGood','order_id','id');
    }
}