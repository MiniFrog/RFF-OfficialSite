<?php
/**
 * Created by PhpStorm.
 * User: guning
 * Date: 2017/9/9
 * Time: 0:38
 */
namespace App\AdminModel\yjfk;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model {
    protected $table = 'feedback';
    public $timestamps = false;

    public function getApiData(){
        $rawData1 = $this
            ->select(
                //'feedback.id as fid',
                //'feedback_response.id as rid',
                //'feedback.user_id as user_id',
                //'feedback_response.admin_id as admin_id',
                'feedback.content as fcontent',
                'feedback_response.content as rcontent'
                //'feedback.created_at as fcreated_at',
                //'feedback_response.created_at as rcreated'
            )
            ->leftJoin('feedback_response', 'feedback.id', '=', 'feedback_response.question_id');
        $rawData = $this
            ->select('feedback.content as fcontent', 'feedback_response.content as rcontent')
            ->leftJoin('feedback_response', 'feedback.id', '=', 'feedback_response.question_id')
            ->where('feedback_response.question_id', '=', NULL)->unionAll($rawData1)->get()->toJson();
        return $rawData;
    }

    public function saveFeedback($data) {
        $insertData = array(
            'user_id' => 0,
            'content' => $data,
            'created_at' => time()
        );
        $res = $this->insert($insertData);
        if ($res) {
            return true;
        } else {
            return false;
        }
    }

}