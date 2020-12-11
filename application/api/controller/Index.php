<?php

namespace app\api\controller;

use app\common\controller\Api;
use addons\adszone\model\AdszoneAds;

/**
 * 首页接口
 */
class Index extends Api
{
    protected $noNeedLogin = ['*'];
    protected $noNeedRight = ['*'];

    /**
     * 首页 - 海报轮播
     */
    public function getBannnerList()
    {
        $result = AdszoneAds::create()->where('zone_id', 1)->field('id,imageurl,linkurl')->order('weigh')->select();
        $this->success('请求成功', $result);
    }
}
