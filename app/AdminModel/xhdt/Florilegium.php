<?php
/**
 * Created by PhpStorm.
 * User: guning
 * Date: 2017/9/3
 * Time: 22:42
 */
namespace App\AdminModel\xhdt;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;

class Florilegium extends Model {
    protected $table = 'florilegium';

    public function getApiData($pageIndex, $pageSize){
        Request::offsetSet('page', $pageIndex);
        $rawData = $this->select('id', 'title', 'abstract', 'updated_at as updateTime', 'imgpath as picUrl')->paginate($pageSize)->toJson();
        $tmpData = json_decode($rawData, true);
        $data['pageIndex'] = (int)$pageIndex;
        $data['totalPage'] = $tmpData['last_page'];
        $data['collection'] = $tmpData['data'];
        return $data;
    }

    public function getList() {
        $tableDatas = $this->select('id', 'title')->get();
        $data = array();
        foreach ($tableDatas as $tableData) {
            $tmp['id'] = $tableData['id'];
            $tmp['title'] = $tableData['title'];
            $data[] = $tmp;
        }
        return $data;
    }

    public function getModify($id){
        $rawData = $this->select('id', 'title', 'imgpath', 'abstract')->where('id', '=', $id)->first();
        $data = array(
            'id' => $rawData->id,
            'title' => $rawData->title,
            'abstract' => $rawData->abstract,
            'imgpath' => $rawData->imgpath
        );
        return $data;
    }

    public function getNullData(){
        return array(
            'id' => '',
            'title' => '',
            'abstract' => '',
            'imgpath' => '',
        );
    }

    public function updateData($rawData){
        $data = array(
            'title' => $rawData['title'],
            'abstract' => $rawData['abstract'],
            'imgpath' => $rawData['imgpath']
        );
        if (!empty($rawData['id'])) {
            $id = $rawData['id'];
            return $this->where('id', '=', $id)->update($data);
        } else {
            if(!empty($data)) {
                return $this->insert($data);
            } else {
                return 0;
            }
        }
    }

    public function deleteData($id) {
        return $this->where('id', '=', $id)->delete();
    }
}

