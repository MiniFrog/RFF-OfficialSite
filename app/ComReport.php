<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComReport extends Model
{
    //
    protected $table = 'com_report';

    protected $fillable = ['content'];

    protected $dates = ['created_at'];

    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function report()
    {
        return $this->belongsTo('App\Report', 'article_id', 'id');
    }
}