<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('guest:user')->except('logout');
    }

    public function showAbout(){
        return view('about');
    }

    public function showRegisterForm(){
        return view("register");
    }

    public function postRegisterForm(Request $request){
        //validate the signup credentials

        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'username' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'password_confirm' => 'required|same:password'
        ]);
        Session::flash('success', "Test Session created successfully !");
        return redirect()->back();

    }

    public function showLoginForm(){
        return view('login');
    }

    public function postLoginForm(){
        return "this isthe post login form";
    }

    public function showFaq(){
        return view('faq');
    }

    public function showContactUs(){
        return view('contact');
    }
}
