<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
    //
    protected $fillable = [
        'name',
        'timeframe',
        'session_id',
        'category_id',
    ];
}
