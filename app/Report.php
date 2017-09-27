<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    //
    protected $table ='report';
    
    protected $dateFormat = 'U';
    
    protected $fillable = ['title', 'abstract'];
    
    public function comReport()
    {
        return $this->hasMany('App\ComReport', 'article_id', 'id');
    }
}
