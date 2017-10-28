<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Association extends Model
{
    protected $table = 'wxmes';
    //protected $table = 'association';

    public $timestamps = false;

    protected $guarded = ['id'];

}
