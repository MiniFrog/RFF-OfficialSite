<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    //protected $table ='reports';
    protected $table ='report';

    protected $dateFormat = 'U';

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function comReport()
    {
        return $this->hasMany('App\ComReport', 'article_id', 'id');
    }
}
