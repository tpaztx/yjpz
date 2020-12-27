<?php

namespace app\common\model;

use think\Model;

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
    public function getSizesTextAttr($value)
    {
        if (!empty($value)) {
            return $this->strArray($value);
        }
        return $value;
    }
    public function getSizeIdsAttr($value)
    {
        if (!empty($value)) {
            return explode("、",$value);
        }
        return $value;
    }
    public function getVipshopPriceAttr($value)
    {
        if (!empty($value)) {
            return explode("、",$value);
        }
        return $value;
    }
    public function getCommissionAttr($value)
    {
        if (!empty($value)) {
            return explode("、",$value);
        }
        return $value;
    }
    public function getSuggestAddPriceAttr($value)
    {
        if (!empty($value)) {
            return explode("、",$value);
        }
        return $value;
    }
    public function getSuggestPriceAttr($value)
    {
        if (!empty($value)) {
            return explode("、",$value);
        }
        return $value;
    }
    /**
     * 截取指定字符串后的内容并转为数组
     */
    public function strArray($str)
    {
        if($str != null){
            $newString = strstr($str,"：");
            $length = strlen("：");
            return explode('、',substr($newString, $length));
        }
    }
}
