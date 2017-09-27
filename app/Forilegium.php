<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forilegium extends Model
{
    //
    protected $table ='forilegium';
    
    protected $dateFormat = 'U';
    
    protected $fillable = ['title', 'abstract'];
}
