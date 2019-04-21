<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use App\Lap;
use App\Category;

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
            Session::flash('success', "Test Session created successfully !");
            return redirect()->back();

    }

    public function viewAllSession(Request $request){

        $laps = Lap::all();

        return view('admin.showsessions', compact('laps'));
    }

    public function viewCreateCategory(){
        return view('admin.add-category');
    }

    public function postCreateCategory(Request $request){

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'session_id' => 'required|numeric',
        ]);
            $category = new Category();
            $category->name = $request->name;
            $category->description  = $request->description;
            $category->session_id = $request->session_id;
            $category->save();
            Session::flash('success', "Category created successfully !");
            return redirect()->back();
    }

    public function viewAllCategory(){
        return view('admin.showcategories');
    }
}
