<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('guest:admin')->except('logout');
    }

    public function showLoginForm(){
        return view('admin.login');
    }

    public function postLoginForm(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect()->route('admin.home');

        }else{
            return back()->withInput($request->only('email'));
        }

    }
}
