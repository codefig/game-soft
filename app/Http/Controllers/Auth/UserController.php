<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth:user')->except('logout');
    }

    public function logoutUser(){
        Auth::logout();
        return redirect()->route('login');
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

    public function showCategories(){
        return view('user.categories');
    }


}
