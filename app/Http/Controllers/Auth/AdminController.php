<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use App\Lap;

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

    public function viewCreateSession(){
        return view('admin.add-session');
    }

    public function postCreateSession(Request $request){

        $request->validate([
            'name' => 'required',
            'start_time' => 'required',
            'duration' => 'required',
            'status' => 'required',
        ]);
            $lap = new Lap();
            $lap->name = $request->name;
            $lap->start_time = $request->start_time;
            $lap->duration = $request->duration;
            $lap->status = $request->status;
            $lap->save();
            Session::flash('message', "err");
            Session::flash('success', "Test Session created successfully !");
            return redirect()->back();

    }

    public function viewAllSession(Request $request){
        return view('admin.showsessions');
    }

    public function viewCreateCategory(){
        return view('admin.add-category');
    }

    public function viewAllCategory(){
        return view('admin.showcategories');
    }
}
