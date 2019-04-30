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

    public function showDashBoard(){
        return view('user.dashboard');
    }

    public function showNotificationsPage(){
        return view('user.notifications');
    }

    public function showReferralsPage(){
        return view('user.referrals');
    }

    public function showStagesPage(){
        return view('user.stages');
    }

    public function showTestPage(){
        return view('user.test');
    }

    public function showCategores(){
        return view('user.categories');
    }


}
