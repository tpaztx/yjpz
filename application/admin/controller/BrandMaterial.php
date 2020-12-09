<?php

namespace app\admin\controller;

use app\common\controller\Backend;

/**
 * 
 *
 * @icon fa fa-circle-o
 */
class BrandMaterial extends Backend
{
    
    /**
     * BrandMaterial模型对象
     * @var \app\admin\model\BrandMaterial
     */
    protected $model = null;

    public function _initialize()
    {
        parent::_initialize();
        $rows = \app\admin\model\Brand::all();
        $brandList = $this->List($rows,'brand_id','brand_name');
        $this->assignconfig('brandList',$brandList);
        $this->model = new \app\admin\model\BrandMaterial;
    }
    public function index($ids = null)
    {
        //设置过滤方法
        $this->request->filter(['strip_tags', 'trim']);
        if ($this->request->isAjax()) {
            list($where, $sort, $order, $offset, $limit) = $this->buildparams();
            $list = $this->model
                ->where($where)
                ->order($sort, $order)
                ->paginate($limit);
            $result = array("total" => $list->total(), "rows" => $list->items());
            return json($result);
        }
        $this->assignconfig('brand_id',$ids);
        $this->assign('brand_id',$ids);
        return $this->view->fetch();
    }

    public function add($ids = null)
    {
        $brand_id = $this->request->param('brand_id');
        if ($this->request->isPost()) {
           $param = $this->request->param('row/a');
           if($param){
               $res = $this->model->create($param);
               if(!$res){
                   $this->error('添加失败！');
               }
               $this->success('添加成功！');
           }
        }
        $this->assign('brand_id',$brand_id);
        return $this->fetch();
    }
    public function import()
    {
        parent::import();
    }

    /**
     * 默认生成的控制器所继承的父类中有index/add/edit/del/multi五个基础方法、destroy/restore/recyclebin三个回收站方法
     * 因此在当前控制器中可不用编写增删改查的代码,除非需要自己控制这部分逻辑
     * 需要将application/admin/library/traits/Backend.php中对应的方法复制到当前控制器,然后进行修改
     */
    

}
