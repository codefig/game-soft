<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lap extends Model
{
    //

    protected $table = 'laps';

    protected $fillable = [
        'name', 'status', 'start_time', 'duration',
    ];

    public function status (){
        if($this->status == 0){
            return "Inactive";
        }else{
            return "Active";
        }
    }

}
