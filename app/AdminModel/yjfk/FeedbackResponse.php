<?php
/**
 * Created by PhpStorm.
 * User: guning
 * Date: 2017/9/9
 * Time: 0:41
 */
namespace App\AdminModel\yjfk;

use Illuminate\Database\Eloquent\Model;

class FeedbackResponse extends Model {
    protected $table = 'feedback_response';

    public $timestamps = false;

    public function getList(){
        $res1 = $this->select(
            'feedback.id as id',
            'feedback.content as question',
            'feedback_response.content as reply',
            'feedback.created_at as ftime',
            'feedback_response.created_at as rtime')
            ->rightJoin('feedback', 'feedback_response.question_id', '=', 'feedback.id');
        $res = $this->select(
            'feedback.id as id',
            'feedback.content as question',
            'feedback_response.content as reply',
            'feedback.created_at as ftime',
            'feedback_response.created_at as rtime')
            ->rightJoin('feedback', 'feedback_response.question_id', '=', 'feedback.id')
            ->where('feedback_response.question_id', '=', NULL)->unionAll($res1)->get();
        return $res;
    }

    public function saveReply($id, $reply){
        $isExist = $this->select('id')->where('question_id', '=', $id)->get()->count();
        if ($isExist == 0) {
            $insertData = array(
                'admin_id' => 0,
                'user_id' => 0,
                'question_id' => $id,
                'content' => $reply,
                'created_at' => time()
            );
            $res = $this->insert($insertData);
        } else {
            $updateData = array(
               'content' => $reply
            );
            $res = $this->where('question_id', '=', $id)->update($updateData);
        }
        if ($res) {
            return true;
        } else {
            return false;
        }
    }
}