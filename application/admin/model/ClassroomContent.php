<?php

namespace app\admin\model;

use think\Model;


class ClassroomContent extends Model
{

    

    

    // 表名
    protected $name = 'classroom_content';
    
    // 自动写入时间戳字段
    protected $autoWriteTimestamp = 'int';

    // 定义时间戳字段名
    protected $createTime = 'createtime';
    protected $updateTime = 'updatetime';
    protected $deleteTime = false;

    // 追加属性
    protected $append = [
        'createtime_text',
        'updatetime_text',
    ];

    public function getCreatetimeTextAttr($value, $data)
    {
        $value = $value ? $value : $data['createtime'];
        return is_numeric($value) ? date("Y-m-d H:i:s", $value) : $value;
    }
    public function getUpdatetimeTextAttr($value, $data)
    {
        $value = $value ? $value : $data['updatetime'];
        return is_numeric($value) ? date("Y-m-d H:i:s", $value) : $value;
    }

    public function getImageAttr($value)
    {
        if (!empty($value)) return cdnurl($value, true);
        return $value;
    }

    
}
