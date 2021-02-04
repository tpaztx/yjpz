<?php


namespace app\api\controller;


use app\admin\model\Brand;
use app\admin\model\BrandMaterial;
use app\admin\model\Classroom;
use app\admin\model\ClassroomContent;
use app\admin\model\Notice;
use app\common\controller\Api;

class Find extends Api
{
    //发现页面接口
    protected $noNeedLogin = '';
    protected $noNeedRight = '*';
    /**
     * 品牌素材
     */
    public function brandList()
    {
        if(!$this->request->isGet()){
            $this->error('非法请求！');
        }
        $list = Brand::order('createtime','desc')->select();
        if(empty($list)){
            $this->error('无品牌数据！');
        }
        if(!$list){
            $this->error('服务器繁忙！');
        }
        $this->success('请求成功！',$list);
    }
    /**
     * 品牌内容
     */
    public function brandShow()
    {
        if(!$this->request->isGet()){
            $this->error('非法请求！');
        }
        $brand_id = $this->request->param('brand_id');
        $list = BrandMaterial::with('brand')->where('brand_id',$brand_id)->select();
        if(empty($list)){
            $this->error('无品牌数据!');
        }
        if(!$list){
            $this->error('服务器繁忙！');
        }
        $this->success('请求成功！',$list);
        
    }
    /**
     * 品牌（全部）
     */
    public function brandAll()
    {
        $brandName =  $this->request->param('brandName');
        $all = BrandMaterial::with(['brand'=>function($query) use($brandName){
            if($brandName){
                $query->where('brand_name','like','%'.$brandName.'%');
            }
        }])
            ->group('brand_id')
            ->select();
        if(empty($all)){
            $this->error('无品牌数据!');
        }
        if(!$all){
            $this->error('服务器繁忙！');
        }
        $this->success('请求成功！',$all);
    }
    /**
     * 公告通知
     */
    public function notice()
    {
        if(!$this->request->isGet()){
            $this->error('非法请求！');
        }
        $list = Notice::order('createtime','desc')->limit(0,3)->field('id,notice_title,createtime,updatetime')->select();
        if(empty($list)){
            $this->error('无公告数据!');
        }
        if(!$list){
            $this->error('服务器繁忙！');
        }
        $this->success('请求成功！',$list);
    }
    /**
     * 公告详情
     */
    public function noticeShow()
    {
        if(!$this->request->isGet()){
            $this->error('非法请求！');
        }
        $notice_id = $this->request->param('notice_id');
        $row =  Notice::get($notice_id);
        if(!$row){
            $this->error('服务器繁忙！');
        }
        $this->success('请求成功！',$row);
    }
    /**
     * 公告(全部)
     */
    public function noticeAll()
    {
        if(!$this->request->isGet()){
            $this->error('非法请求！');
        }
        $rows =  Notice::all();
        if(!$rows){
            $this->error('服务器繁忙！');
        }
        $this->success('请求成功！',$rows);
    }
    /**
     * 课堂
     */
    public function classRoom()
    {
        if(!$this->request->isGet()){
            $this->error('非法请求！');
        }
        $list = Classroom::all();
        if(empty($list)){
            $this->error('无课堂数据!');
        }
        if(!$list){
            $this->error('服务器繁忙！');
        }
        $this->success('请求成功！',$list);
    }
    /**
     * 课堂分类
     */
    public function classContent()
    {
        if(!$this->request->isGet()){
            $this->error('非法请求！');
        }
        $class_id = $this->request->param('class_id');
        $list=ClassroomContent::where('classroom_id',$class_id)->field('id,classroom_id,image,title,createtime,updatetime')->select();
        if(empty($list)){
            $this->error('无课堂数据!');
        }
        if(!$list){
            $this->error('服务器繁忙！');
        }
        $this->success('请求成功！',$list);
    }
    /**
     * 课堂分类详情
     */
    public function classContentShow()
    {
        $content_id = $this->request->param('content_id');
        $row=ClassroomContent::get($content_id);
        if(!$row){
            $this->error('服务器繁忙！');
        }
        $this->success('请求成功！',$row);
    }
}