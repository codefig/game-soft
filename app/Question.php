<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //

    protected $fillable = [
        'stage_id',
        'content',
        'a',
        'b',
        'c',
        'd',
        'correct'
    ];

    public function stage(){
        return $this->belongsTo(Stage::class);
    }
}
