<?php
/**
 * Created by PhpStorm.
 * User: 罟宁
 * Date: 2017/8/22
 * Time: 21:03
 */
namespace App\Http\Controllers\admin;

use App\AdminModel\xhdt\Florilegium;
use App\AdminModel\xhdt\Report;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\AdminModel\xhdt\Activity;

class Xhdt extends Controller
{
    private function getModelView($page){
        $data = array();
        switch ($page) {
            case 'act' :
                $data['model'] = new Activity();
                $data['view'] = 'admin/xhdt/act';
                break;
            case 'report' :
                $data['model'] = new Report();
                $data['view'] = 'admin/xhdt/report';
                break;
            case 'collection' :
                $data['model'] = new Florilegium();
                $data['view'] = 'admin/xhdt/collection';
                break;
            default:
                abort(404);
                break;
        }
        return $data;
    }

    /**
     * qList:获取列表
     * @author by 罟宁
     * @param $page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * createTime:
     */
    public function qList($page)
    {
        $res = $this->getModelView($page);
        $result = $res['model']->getList();
        return view($res['view'] . 'list', ['results' => $result]);
    }
    public function changeStatus($page,$id,$status){
        $res = $this->getModelView($page);
        if ($res['model']->changeStatus($id, $status + 1) >= 1) {
            $data['state'] = true;
        } else {
            $data['state'] = false;
        }
        return $data;
    }

    public function del($page, Request $request)
    {
        $res = $this->getModelView($page);
        if ($res['model']->deleteData($request->input('id')) >= 1) {
            $data['state'] = true;
        } else {
            $data['state'] = false;
        }
        return $data;
    }

    public function newView($page)
    {
        $res = $this->getModelView($page);
        $data = $res['model']->getNullData();
        return view($res['view'] . 'modify', ['result' => $data]);
    }

    public function modifyView($page, Request $request) {
        $res = $this->getModelView($page);
        if (empty($request->input('id'))) {
            return $this->newView($page);
        }
        $data = $res['model']->getModify($request->input('id'));
        return view($res['view'] . 'modify', ['result' => $data]);
    }
    public function qUpdate($page, Request $request)
    {
        $res = $this->getModelView($page);
        $res['model']->updateData($request->all());
        return $this->qList($page);
    }

}