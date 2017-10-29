<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TechGroup extends Model
{
    protected $guarded = ['id'];

    protected $table = 'tech_groups';

    public $timestamps = true;

    protected $dateFormat = 'U';
}
