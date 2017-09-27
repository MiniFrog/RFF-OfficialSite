<?php
/**
 * Created by PhpStorm.
 * User: 罟宁
 * Date: 2017/7/29
 * Time: 16:28
 */
namespace APP\Http\Controllers\customer;

use App\AdminModel\xhgk\WXMes;
use App\AdminModel\xhgk\WXLs;
use App\AdminModel\xhgk\WXDpt;
use App\AdminModel\xhgk\WXTec;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class About extends Controller {
    public function index($model){
        $result = $model->selectNeed(1);
        return json_encode($result, JSON_UNESCAPED_UNICODE);
    }

    public function association(){
        $model = new WXMes();
        return $this->index($model);
    }

    public function director(){
        $model = new WXLs();
        return $this->index($model);
    }

    public function department(){
        $model = new WXDpt();
        return $this->index($model);
    }

    public function technical(){
        $model = new WXTec();
        return $this->index($model);
    }

}