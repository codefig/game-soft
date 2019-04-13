<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth:admin')->except('logout');
    }

    public function showHome(){
        return view('admin.home');
    }

    public function logout(){

        Auth::logout();
        return redirect()->route('admin.login');
    }

    public function createSession(){
        return view('admin.add-session');
    }

    public function viewAllSession(Request $request){
        return view('admin.showsessions');
    }
}
