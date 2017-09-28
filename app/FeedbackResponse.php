<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeedbackResponse extends Model
{
    //
    protected $table = 'feedback_response';
    
    protected $fillable = ['content', 'created_at'];
    
    protected $dates = ['created_at'];
    
    public $timestamps = false;
    
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
    
    public function feedback()
    {
        return $this->belongsTo('App\Feedback', 'question_id', 'id');
    }
    
    public function admin()
    {
        return $this->belongsTo('App\Admin', 'admin_id', 'id');
    }
}
