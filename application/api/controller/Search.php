<?php

namespace app\api\controller;

use app\common\controller\Api;
use app\common\model\Search as SearchKeyword;
use app\common\model\GoodsList;

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
     * 客户端搜索
     * $star    从第几条数据开始处理分页数据 ++ 之后作为下次分页获取数据的起始点
     * $pageSize    每次返回的数据数量
     */
    public function search()
    {
        $pageIndex = $this->request->request('pageIndex')?:1;
        $pageSize = $this->request->request('pageSize')?:10;
        $keyWord = trim($this->request->request('keyWord'));
        if (!$keyWord) $this->error('请输入搜索内容！');
        $searchModel = new SearchKeyword;
        //插入用户搜索的历史记录
        $save_keyWord = $searchModel->insertKeyWord($this->auth->id, $keyWord);
        if (!$save_keyWord) {
            $this->error('处理搜索历史记录数据出错，请联系客服！');
        }
        $result = GoodsList::where("goodName like '%".$keyWord."%'")
                            ->field('goodId,goodName,color,material,sizes_text,sn,goodBigImage')
                            ->limit(($pageIndex - 1)*$pageSize, $pageSize)
                            ->select();
        if ($result) {
            if (empty($data)) {
                $this->success('未查询到数据结果！');
            }
            foreach ($result as $key => $val) {
                $result[$key]['goodBigImage'] = unserialize($val['goodBigImage']);
            }
            $this->success('请求成功！', $result);
        }else{
            $this->error('请求失败！');
        }
    }

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
