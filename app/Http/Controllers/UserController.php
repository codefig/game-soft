<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function __construct()
    {
        $this-middleware('guest:user')->except('logout');
    }

    public function showLoginForm(){

        return "this is the user login form ";
    }

    public function postLoginForm(Request $request){
        return "this is the login form submission";
    }
}
