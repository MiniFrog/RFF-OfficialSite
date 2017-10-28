<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TechGroup extends Model
{
    protected $guarded = ['id'];

    protected $table = 'wxtec';
    //protected $table = 'tech_group';

    public $timestamps = true;

    protected $dateFormat = 'U';
}