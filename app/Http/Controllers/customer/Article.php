<?php
/**
 * Created by PhpStorm.
 * User: guning
 * Date: 2017/9/10
 * Time: 16:59
 */
namespace App\Http\Controllers\customer;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\AdminModel\Article\Article as ArticleModel;

class Article extends Controller {
    public function getDetails(Request $request) {
        $model = new  ArticleModel();
        if (empty($request->input('id'))) {
            return json_encode(array(
                'state' => 'failed',
                'mes' => 'no id'
            ));
        }
        $res = $model->getApiData($request->input('id'));
        if (empty($res)) {
            return json_encode(array(
                'state' => 'failed',
                'mes' => 'failed to get article!'
            ));
        } else {
            return json_encode($res, JSON_UNESCAPED_UNICODE);
        }
    }
}