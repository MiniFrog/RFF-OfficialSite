<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\AdminModel\sybj\Caro;
use App\AdminModel\sybj\Dynam;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Sybj extends Controller
{
    private $viewPage;

    private function getModelName($page){
        switch($page){
            case 'lbt' :
                $result['model'] = new Caro();
                $result['state'] = true;
                $this->viewPage = 'admin/sybj/lbt';
                break;
            case 'sydt' :
                $result['model'] = new Dynam();
                $result['state'] = true;
                $this->viewPage = 'admin/sybj/sydt';
                break;
            default:
                $result['state'] = false;
        }
        return $result;
    }

    public function show($page){
        $getResult = $this->getModelName($page);
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
