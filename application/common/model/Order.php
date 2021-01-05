<?php


namespace app\common\model;


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
        if(!empty($value)){
            $value = [-1=>'已取消',0=>'待付款',1=>'待发货',2=>'已发货',3=>"已完成"];
            return $value[$data['status']];
        }
        return $value;
    }
    public function getAfterSalesTextAttr($value,$data)
    {
        if(!empty($value)) {
            $value = [0 => '', 1 => '审核中', 2 => '未通过', 3 => "已通过", 4 => "已完成"];
            return $value[$data['after_sales']];
        }
        return $value;
    }
    public function getCreatetimeTextAttr($value, $data)
    {
        if(!empty($value)) {
            $value = $value ? $value : $data['createtime'] ?: "";
            return is_numeric($value) ? date("Y-m-d H:i:s", $value) : $value;
        }
        return $value;
    }
    public function getUpdatetimeTextAttr($value, $data)
    {
        if(!empty($value)) {
            $value = $value ? $value : $data['updatetime'];
            return is_numeric($value) ? date("Y-m-d H:i:s", $value) : $value;
        }
        return $value;
    }

    public function goods()
    {
        return $this->hasMany('OrderGood','order_id','id');
    }
}