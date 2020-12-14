<?php

namespace app\common\model;

use think\Model;

/**
 * 客户端搜索
 */
class Search Extends Model
{
    // 表名
    protected $name = 'search';
    // 开启自动写入时间戳字段
    protected $autoWriteTimestamp = 'int';
    // 定义时间戳字段名
    protected $createTime = 'createtime';
    protected $updateTime = '';
    // 追加属性
    protected $append = [
    ];

    /**
     * 新增用户的搜索关键词
     */
    public function insertKeyWord($uid, $keyWord = '')
    {
        $keyWord = $keyWord?:'';
        if ($keyWord == '') {
            return false;
        }
        $data = self::where(['keyword' => $keyWord, 'user_id' => $uid])->value('id');
        $result = false;
        if ($data) {
            $result = self::where(['keyword' => $keyWord, 'user_id' => $uid])->update(['updatetime' => time()]);
            $result = true;
        }else{
            $result = self::insert(['user_id' => $uid, 'keyword' => $keyWord, 'createtime' => time()]);
        }
        if ($result) {
            return true;
        }else{
            return false;
        }
    }

    /**
     * 搜索历史记录
     */
    public function searchLog($uid)
    {
        $result = self::where('user_id',$uid)->order('updatetime desc, createtime desc')->column('keyword');
        return $result;
    }
}
