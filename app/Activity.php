<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    //
    protected $table = 'activities';

    protected $guarded = ['id'];

    public $timestamps = false;
}
