<?php
/**
 * Created by PhpStorm.
 * User: guning
 * Date: 2017/9/4
 * Time: 22:19
 */
namespace App\Http\Controllers\admin;


use App\AdminModel\yjfk\FeedbackResponse;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Request;

class Yjfk extends Controller {
    public function qList() {
        $model = new FeedbackResponse();
        $data = $model->getList();
        return view('admin/yjfk/list', ['results' => $data]);
    }

    public function reply(Request $request) {
        $reply = $request->input('reply');
        if (empty($reply)) {
            return array(
                'state' => false,
            );
        }
        $id = $request->input('id');
        $model = new FeedbackResponse();
        if ($model->saveReply($id, $reply)){
            $data['state'] = true;
        }else{
            $data['state'] = false;
        }
        return $data;
    }
}