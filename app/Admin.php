<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    //
    protected $table = 'admin';
    
    public $timestamps = false;
    
    public function feedbackResponse()
    {
        return $this->hasMany('App\FeedbackResponse', 'admin_id', 'id');
    }
}
