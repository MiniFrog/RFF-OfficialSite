<?php

namespace App\AdminModel\sybj;

use Illuminate\Database\Eloquent\Model;

class Caro extends Model
{
    protected $table = 'carousel';
    public $timestamps = false;

    //
    public function selectNeed(){
        return $this->select('id', 'imgpath', 'imgmes', 'imgtype', 'acturl')->get();
    }
    public function getApiData(){
        $res = $this->select('id', 'imgpath', 'imgmes', 'imgtype', 'acturl')->get();
        $data = array();
        if (is_null($res->first())) {
            $data[] = array(
                'id' => '',
                'title' => '',
                'content' => '',
                'image' => '',
                'url' => ''
            );
            return $data;
        }
        foreach ($res as $r) {
            $data[] = array(
                'id' => $r->id,
                'title' => $r->imgtype,
                'content' => $r->imgmes,
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
}
