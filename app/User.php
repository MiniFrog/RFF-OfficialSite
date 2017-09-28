<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /*'year' => 'Y',
    'yearIso' => 'o',
    'month' => 'n',
    'day' => 'j',
    'hour' => 'G',
    'minute' => 'i',
    'second' => 's',
    'micro' => 'u',
    'dayOfWeek' => 'w',
    'dayOfYear' => 'z',
    'weekOfYear' => 'W',
    'daysInMonth' => 't',
    'timestamp' => 'U',*/

    protected $table = 'user';

    protected $dates = ['login_time', 'regis_time'];

    public $timestamps = false;

    public function comReport()
    {
        return $this->hasMany('App\ComReport', 'user_id', 'id');
    }

    public function comRepairTrick()
    {
        return $this->hasMany('App\ComRepairTrick', 'user_id', 'id');
    }

    public function feedback()
    {
        return $this->hasMany('App\Feedback', 'user_id', 'id');
    }

    public function feedbackResponse()
    {
        return $this->hasMany('App\FeedbackResponse', 'user_id', 'id');
    }

    public function qqUser()
    {
        return $this->hasOne('App\QQUser', 'user_id', 'id');
    }
}

