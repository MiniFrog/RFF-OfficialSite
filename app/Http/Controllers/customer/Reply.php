<?php
/**
 * Created by PhpStorm.
 * User: guning
 * Date: 2017/9/9
 * Time: 16:38
 */
namespace App\Http\Controllers\customer;


use App\AdminModel\yjfk\Feedback;
use App\Http\Controllers\Controller;
use App\Http\Requests\Request;

class Reply extends Controller {
    public function getReply(){
        $model = new Feedback();
        return $model->getApiData();
    }

    public function postReply(Request $request){
        if (!empty($request->input('mes'))) {
            $model = new Feedback();
            if ($model->saveFeedback($request->input('mes'))) {
                $res = array(
                    'state' => 'success'
                );
            } else {
                $res = array(
                    'state' => 'failed',
                    'mes' => 'server failed to save your message!'
                );
            }
        } else {
            $res = array(
               'state' => 'failed',
                'mes' => 'nothing input!'
            );
        }
        return json_encode($res);
    }
}