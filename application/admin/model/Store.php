<?php

namespace app\admin\model;

use think\Model;


class Store extends Model
{

    

    

    // 表名
    protected $name = 'store';
    
    // 自动写入时间戳字段
    protected $autoWriteTimestamp = 'int';

    // 定义时间戳字段名
    protected $createTime = 'createtime';
    protected $updateTime = 'updatetime';
    protected $deleteTime = false;

    // 追加属性
    protected $append = [

    ];

    public function getStoreQrCodeAttr($value)
    {
        if (!empty($value)) return cdnurl($value, true);
        return $value;
    }

    public function getStoreLogoAttr($value)
    {
        if (!empty($value)) return cdnurl($value, true);
        return $value;
    }

    public function getStore($user_id)
    {
        return $this->where('user_id',$user_id)->find();
    }
}
