<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    protected $table = 'directors';

    public $timestamps = true;

    protected $guarded = ['id'];
}
