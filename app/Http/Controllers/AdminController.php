<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('guest:web');
    }

    public function showLogin(){
        return "This returns the login form view ";
    }
}
