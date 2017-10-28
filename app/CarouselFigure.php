<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarouselFigure extends Model
{
    protected $table = 'carousel';

    protected $guarded = ['id', 'updated_at', 'created_at'];

    public $timestamps = true;
}
