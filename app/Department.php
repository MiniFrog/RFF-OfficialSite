<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    //protected $table = 'department'
    protected $table = 'wxdpt';

    protected $guarded = ['id'];

    public $timestamps = true;
}
