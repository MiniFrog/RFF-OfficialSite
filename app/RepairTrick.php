<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RepairTrick extends Model
{
    //
    protected $table = 'repair_trick';
    
    protected $dateFormat = 'U';
    
    protected $fillable = ['title', 'abstract'];
    
    public function comRepairTrick()
    {
        return $this->hasMany('App\ComRepairTrick', 'article_id', 'id');
    }
}
