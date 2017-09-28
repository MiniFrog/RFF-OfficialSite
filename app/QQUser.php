<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QQUser extends Model
{
    //
    protected $table = 'qq_user';
    
    protected $guarded = ['id', 'user_id'];
    
    public $timestamps = false;
    
    public function user() 
    {
        return $this->belongsTo('App\User', 'user_id', 'id'); 
    }
}
