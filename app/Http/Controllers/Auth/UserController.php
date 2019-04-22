<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth:user')->except('logout');
    }

    public function showHome(){
        return "this is the user home function";
    }
}
