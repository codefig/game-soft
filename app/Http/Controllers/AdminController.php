<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('guest:admin')->except('logout');
    }

    public function showLogin(){
        return "This returns the login form view ";
    }

    public function postLoginForm(Request $request){
        return "this is the post login form for admin";
    }
}
