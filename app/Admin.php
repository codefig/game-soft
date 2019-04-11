<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    //

    protected $guard = 'admin';

    protected $filable = ['email', 'password'];

    protected $hidden = [
        'password'
    ];
}
