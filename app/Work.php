<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    //
    //protected $table ='works';
    protected $table = 'florilegium';

    protected $dateFormat = 'U';

    protected $fillable = ['title', 'abstract'];
}
