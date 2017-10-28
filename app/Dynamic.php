<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dynamic extends Model
{
    //
    protected $table = 'dynamics';

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public $timestamps = true;
}
