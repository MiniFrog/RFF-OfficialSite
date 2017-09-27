<?php

namespace App\AdminModel\sybj;

use Illuminate\Database\Eloquent\Model;

class Dynam extends Model
{
    protected $table = 'dynamics';
    public $timestamps = false;

    //
    public function selectNeed(){
        return $this->select('id', 'imgpath', 'title', 'summary', 'acturl')->get();
    }

    public function getApiData(){
        $res = $this->select('id', 'imgpath', 'title', 'summary', 'acturl')->get();
        $data = array();
        if (is_null($res->first())) {
            $data[] = array(
                'id' => '',
                'title' => '',
                'abstract' => '',
                'image' => '',
                'url' => ''
            );
            return $data;
        }
        foreach ($res as $r) {
            $data[] = array(
                'id' => $r->id,
                'title' => $r->title,
                'abstract' => $r->summary,
                'image' => $r->imgpath,
                'url' => $r->acturl
            );
        }
        return $data;
    }

    public function updateData($data){
        $requestdata = $data;
        foreach($requestdata as $key => $value){
            foreach($value as $k => $v){
                if ($key == 'acturl') {
                    if (0 === strcmp($v, (int) $v)) {//如果是id转成url
                        $v = '/api/article/details?id=' . $v;
                    }
                }
                $result[$k][$key] = $v;
            }
        }

        $res[1] = 0;
        foreach($result as $item){
            if($item['id'] == ''){
                $insert[] = $item;
            }else{
                $res[1] += $this->where('id', '=', $item['id'])->update($item);
            }
        }

        if(!empty($insert)) {
            $res[0] = $this->insert($insert);
        }

        return true;
    }

    public function delData($id){
        return $this->where('id', '=', $id)->delete();
    }
}
