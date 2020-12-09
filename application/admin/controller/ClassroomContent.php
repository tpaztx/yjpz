<?php

namespace app\admin\controller;

use app\common\controller\Backend;

/**
 * 
 *
 * @icon fa fa-circle-o
 */
class ClassroomContent extends Backend
{
    
    /**
     * ClassroomContent模型对象
     * @var \app\admin\model\ClassroomContent
     */
    protected $model = null;

    public function _initialize()
    {
        parent::_initialize();
        $rows = \app\admin\model\Classroom::all();
        $classList = $this->List($rows,'id','title');
        $this->assignconfig('classList',$classList);
        $this->model = new \app\admin\model\ClassroomContent;

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
        $this->assignconfig('classroom_id',$ids);
        $this->assign('classroom_id',$ids);
        return $this->view->fetch();
    }
    public function import()
    {
        parent::import();
    }

    public function add($ids = null)
    {
        $class_id = $this->request->param('class_id');
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
        $this->assign('class_id',$class_id);
        return $this->fetch();
    }
    /**
     * 默认生成的控制器所继承的父类中有index/add/edit/del/multi五个基础方法、destroy/restore/recyclebin三个回收站方法
     * 因此在当前控制器中可不用编写增删改查的代码,除非需要自己控制这部分逻辑
     * 需要将application/admin/library/traits/Backend.php中对应的方法复制到当前控制器,然后进行修改
     */
    

}
