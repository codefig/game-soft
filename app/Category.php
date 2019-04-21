<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = 'category';

    protected $fillable = [
        'name',
        'description',
        'session_id',
    ];

    public function lap(){
        return $this->belongsTo(Lap::class, 'session_id');
    }
}
