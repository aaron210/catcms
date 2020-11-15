<?php

namespace app\admin\controller;

use app\common\controller\Backend;

/**
 * 模型管理
 *
 * @icon fa fa-circle-o
 */
class Cmsmodel extends Backend
{
    
    /**
     * Cmsmodel模型对象
     * @var \app\admin\model\Cmsmodel
     */
    protected $model = null;

    public function _initialize()
    {
        parent::_initialize();
        $this->model = new \app\admin\model\Cmsmodel;
        
    }

    public function import()
    {
        parent::import();
    }
    
    public function get_template_list()
    {
        $type = $this->request->post('type');
        if( $type =="xiangqing"){

            return [
                "list"=>[
                     [
                         "id"=>4,
                         "name"=>"xq1.html",
                     ]
                     ,
                     [
                         "id"=>5,
                         "name"=>"xq2.html",
                     ]
                ]
            ];
        }
        else if( $type =="lanmu"){

            return [
                "list"=>[
                     [
                         "id"=>6,
                         "name"=>"lm1.html",
                     ]
                     ,
                     [
                         "id"=>7,
                         "name"=>"lm2.html",
                     ]
                ]
            ];
        }

       return [
           "list"=>[
                [
                    "id"=>1,
                    "name"=>"liebiao1.html",
                ]
                ,
                [
                    "id"=>2,
                    "name"=>"liebiao2.html",
                ]
                ,
                [
                    "id"=>3,
                    "name"=>"liebiao3.html",
                ]
                ,
           ]
       ];
    }

    /**
     * 默认生成的控制器所继承的父类中有index/add/edit/del/multi五个基础方法、destroy/restore/recyclebin三个回收站方法
     * 因此在当前控制器中可不用编写增删改查的代码,除非需要自己控制这部分逻辑
     * 需要将application/admin/library/traits/Backend.php中对应的方法复制到当前控制器,然后进行修改
     */
    

}
