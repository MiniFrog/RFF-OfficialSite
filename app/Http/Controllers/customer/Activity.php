<?php
namespace App\Http\Controllers\customer;

use App\AdminModel\xhdt\Florilegium;
use App\AdminModel\xhdt\Report;
use App\AdminModel\xhdt\Activity as Act;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Activity extends Controller
{
    //前端请求api接口，返回status=1的活动
    public function active(Request $request)
    {
        $model = new Act();
        return json_encode($model->getApiData(), JSON_UNESCAPED_UNICODE);
    }

    public function collection(Request $request){
        $pageIndex = $request->input('pageIndex');
        $pageSize = $request->input('pageSize');
        if (empty($pageIndex) || empty($pageSize)) {
            return 'Invalid request param!';
        }
        $model = new Florilegium();
        return $model->getApiData($pageIndex, $pageSize);
    }
    public function report(Request $request){
        $pageIndex = $request->input('pageIndex');
        $pageSize = $request->input('pageSize');
        if (empty($pageIndex) || empty($pageSize)) {
            return 'Invalid request param!';
        }
        $model = new Report();
        return $model->getApiData($pageIndex, $pageSize);
    }
}
