<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $table ='reports';

    protected $dateFormat = 'U';

    protected $guarded = ['id', 'created_at', 'updated_at'];

}
