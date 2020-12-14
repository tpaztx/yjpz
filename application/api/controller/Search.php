<?php

namespace app\api\controller;

use app\common\controller\Api;
use app\common\model\Search as SearchKeyword;

/**
 * 示例接口
 */
class Search extends Api
{
 
    //如果$noNeedLogin为空表示所有接口都需要登录才能请求
    //如果$noNeedRight为空表示所有接口都需要验证权限才能请求
    //如果接口已经设置无需登录,那也就无需鉴权了
    //
    // 无需登录的接口,*表示全部
    protected $noNeedLogin = ['test', 'test1'];
    // 无需鉴权的接口,*表示全部
    protected $noNeedRight = ['*'];

    /**
     * 获取用户的搜索历史
     */
    public function searchLog()
    {
        $searchModel = new SearchKeyword;
        $result = $searchModel->searchLog($this->auth->id);
        $this->success('请求成功！', $result);
    }

    /**
     * 清空搜索历史记录
     */
    public function searchLogDel()
    {
        $searchModel = new SearchKeyword;
        $result = $searchModel->where('user_id', $this->auth->id)->delete();
        $this->success('请求成功！', $result);
    }
}
