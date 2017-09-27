<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\AdminModel\xhgk\WXMes;
use App\AdminModel\xhgk\WXLs;
use App\AdminModel\xhgk\WXDpt;
use App\AdminModel\xhgk\WXTec;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Xhgk extends Controller
{
    private $viewPage;

    private function getModelName($page){
        switch($page){
            case 'gywx' :
                $result['model'] = new WXMes();
                $result['state'] = true;
                $this->viewPage = 'admin/xhgk/gywx';
                break;
            case 'xrls' :
                $result['model'] = new WXLs();
                $result['state'] = true;
                $this->viewPage = 'admin/xhgk/xrls';
                break;
            case 'bmjs' :
                $result['model'] = new WXDpt();
                $result['state'] = true;
                $this->viewPage = 'admin/xhgk/bmjs';
                break;
            case 'jsxz' :
                $result['model'] = new WXTec();
                $result['state'] = true;
                $this->viewPage = 'admin/xhgk/jsxz';
                break;
            default:
                $result['state'] = false;
        }
        return $result;
    }

    public function show($page){
        $getResult = $this->getModelName($page);
        //return $getResult;
        if($getResult['state']){
            $mymodel = $getResult['model'];
            $result = $mymodel->selectNeed();
            return view($this->viewPage, ['results' => $result]);
        }else{
            abort(404);
        }

    }

    public function update(Request $request, $page){
        $getResult = $this->getModelName($page);
        if($getResult['state']){
            $mymodel = $getResult['model'];
            $data['state'] = $mymodel->updateData($request->all());
            return $data;
        }else{
            abort(404);
        }
    }

    public function del(Request $request, $page){
        $getResult = $this->getModelName($page);
        if($getResult['state']) {
            $mymodel = $getResult['model'];
            if ($mymodel->delData($request->input('id')) >= 1) {
                $data['state'] = true;
            } else {
                $data['state'] = false;
            }
            return $data;
        }else{
            abort(404);
        }
    }
}
