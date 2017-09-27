<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComRepairTrick extends Model
{
    //
    protected $table = 'com_repair_trick';
    
    protected $dates = ['created_at'];
    
    protected $fillable = ['content', 'created_at'];
    
    public $timestamps = false;
    
    public function repairTrick()
    {
        return $this->belongsTo('App\RepairTrick', 'article_id', 'id'); 
    }
    
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
