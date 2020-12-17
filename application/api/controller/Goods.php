<?php

namespace app\api\controller;

use app\common\controller\Api;
use app\common\model\Search as SearchKeyword;
use app\common\model\GoodsList;
use app\api\controller\Wph;

/**
 * 示例接口
 */
class Goods extends Api
{
 
    //如果$noNeedLogin为空表示所有接口都需要登录才能请求
    //如果$noNeedRight为空表示所有接口都需要验证权限才能请求
    //如果接口已经设置无需登录,那也就无需鉴权了
    //
    // 无需登录的接口,*表示全部
    protected $noNeedLogin = ['test', 'test1'];
    // 无需鉴权的接口,*表示全部
    protected $noNeedRight = ['*'];

    public function getGoodsSize()
    {
        $goodFullId = $this->request->request('goodFullId')?:0;
        if ($goodFullId) {
            $wph = new Wph;
            $goods = Wph::goodsDetailWph('101101', $goodFullId);
            if ($goods && !empty($goods)) {
                $this->success('ok',$goods);
                // $result = $goods
            }else{
                $this->error('查询商品信息异常！');
            }
        }else{
            $this->error('缺少请求参数商品ID！');
        }
    }
}
