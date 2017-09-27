<?php

namespace App\AdminModel\xhgk;

use Illuminate\Database\Eloquent\Model;

class WXTec extends Model
{
    protected $table = 'wxtec';
    public $timestamps = false;

    //
    public function selectNeed($mode = 0){
        $res = $this->select('id', 'group', 'intro', 'imgpathf', 'imgpaths', 'imgpatht')->get();
        if ($mode == 1) {
            if (is_null($res->first())) {
                $data[0]['id'] = '';
                $data[0]['group'] = '';
                $data[0]['intro'] = '';
                $data[0]['img1'] = '';
                $data[0]['img2'] = '';
                $data[0]['img3'] = '';
            } else {
                foreach ($res as $r) {
                    $data[] = array(
                        'id' => $r->id,
                        'group' => $r->group,
                        'intro' => $r->intro,
                        'image' => array(
                            $r->imgpathf,
                            $r->imgpaths,
                            $r->imgpatht
                        )
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
