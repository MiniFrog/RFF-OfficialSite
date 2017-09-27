<?php
/**
 * Created by PhpStorm.
 * User: guning
 * Date: 2017/9/2
 * Time: 23:20
 */
namespace App\Http\Controllers\customer;

use App\AdminModel\sybj\Caro;
use App\AdminModel\sybj\Dynam;
use App\Http\Controllers\Controller;

class Home extends Controller {
    public function caro(){
        $model = new Caro();
        return json_encode($model->getApiData(), JSON_UNESCAPED_UNICODE);
    }
    public function dynamic(){
        $model = new Dynam();
        return json_encode($model->getApiData(), JSON_UNESCAPED_UNICODE);
    }
}