<?php


namespace app\api\controller;


use app\common\controller\Api;

class Upload extends Api
{
    public function upload()
    {
       $upload = new \app\common\library\Upload();
       $res=$upload->upload();
       if(!$res){
           $this->error($upload->getError());
       }
       $this->success('上传成功！',$res['url']);
    }
}