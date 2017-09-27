<?php

namespace App\AdminModel\xhgk;

use Illuminate\Database\Eloquent\Model;

class WXLs extends Model
{
    protected $table = 'wxls';
    public $timestamps = false;

    //
    public function selectNeed($mode = 0){
        $res = $this->select('id', 'position', 'name', 'wish', 'imgpath')->get();
        if ($mode == 1) {
            if (is_null($res->first())) {
                $data[0]['id'] = '';
                $data[0]['position'] = '';
                $data[0]['name'] = '';
                $data[0]['wish'] = '';
                $data[0]['img'] = '';
            }else {
                foreach ($res as $r) {
                    $data[] = array(
                        'id' => $r->id,
                        'image' => $r->imgpath,
                        'position' => $r->position,
                        'name' => $r->name,
                        'wish' => $r->wish
                    );
                }
            }
        } else {
            $data = $res;
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


    public function delData($id){
        return $this->where('id', '=', $id)->delete();
    }
}
