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
        $this->middleware('auth:admin');
    }

    public function showHome(){
        return view('admin.index');
    }

    public function logout(){

        Auth::logout();
        return redirect()->route('admin.login');
    }
}
