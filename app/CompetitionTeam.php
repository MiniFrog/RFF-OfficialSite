<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompetitionTeam extends Model
{
    //
    protected $table = 'team';
    
    protected $guarded = ['id'];
    
    public $timestamps = false;
    
    public function competitionMember()
    {
        return $this->hasMany('App\CompetitionMember', 'team_id', 'id');
    }
}
