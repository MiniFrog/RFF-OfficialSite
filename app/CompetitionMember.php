<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompetitionMember extends Model
{
    //
    protected $table = 'member';
    
    protected $guarded = ['id'];
    
    public $timestamps = false;
}
