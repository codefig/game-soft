<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Symfony\Component\Console\Question\Question;

class Stage extends Model
{
    //
    protected $fillable = [
        'name',
        'timeframe',
        'session_id',
        'category_id',
    ];



    public function lap(){
        return $this->belongsTo(Lap::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }


}
