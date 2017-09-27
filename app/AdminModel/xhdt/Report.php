<?php
/**
 * Created by PhpStorm.
 * User: guning
 * Date: 2017/9/3
 * Time: 21:48
 */
namespace App\AdminModel\xhdt;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;

class Report extends Model {
    protected $table = 'report';
    protected $guarded = ['id'];
    public function getApiData($pageIndex, $pageSize){
        Request::offsetSet('page', $pageIndex);
        $rawData = $this->select('id', 'title', 'abstract', 'updated_at as updateTime', 'imgpath as picUrl')->paginate($pageSize)->toJson();
        $tmpData = json_decode($rawData, true);
        $data['pageIndex'] = (int)$pageIndex;
        $data['totalPage'] = $tmpData['last_page'];
        $data['report'] = $tmpData['data'];
        return $data;
    }


    public function getList() {
        $tableDatas = $this->select('id', 'title', 'status')->get();
        $data = array();
        foreach ($tableDatas as $tableData) {
            $tmp['id'] = $tableData['id'];
            $tmp['title'] = $tableData['title'];
            $tmp['status'] = $tableData['status'];
            $data[] = $tmp;
        }
        return $data;
    }

    public function getModify($id){
        $rawData = $this->select('id', 'title', 'abstract', 'imgpath')->where('id', '=', $id)->first();
        $fileName = $rawData->id . ".txt";
        $file = '';
        if (Storage::disk('uploadHtml')->exists($fileName)) {
            $file = Storage::disk('uploadHtml')->get($fileName);
        }
        $data = array(
            'id' => $rawData->id,
            'title' => $rawData->title,
            'abstract' => $rawData->abstract,
            'imgpath' => $rawData->imgpath,
            'content' => $file
        );
        return $data;
    }

    public function getNullData(){
        return array(
            'id' => '',
            'title' => '',
            'abstract' => '',
            'imgpath' => '',
            'content' => ''
        );
    }

    public function updateData($rawData){
        $data = array(
            'title' => $rawData['title'],
            'abstract' => $rawData['abstract'],
            'imgpath' => $rawData['imgpath']
        );
        if (!empty($rawData['id'])) {
            $fileName = $rawData['id'] . ".txt";
            Storage::disk('uploadHtml')->put($fileName, $rawData['content']);
            return $this->where('id', '=', $rawData['id'])->update($data);
        } else {
            if(!empty($data)) {
                $res = $this->create($data);
                Storage::disk('uploadHtml')->put($res->id . ".txt", $rawData['content']);
            } else {
                return 0;
            }
        }
    }

    public function changeStatus($id, $status){
        if ($status >= 3 || $status < 0) {
            $status = 0;
        }
        return $this->where('id', '=', $id)->update(array('status' => $status));
    }

    public function deleteData($id) {
        return $this->where('id', '=', $id)->delete();
    }
}