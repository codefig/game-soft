<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use App\Lap;
use App\Category;
use Illuminate\Filesystem\Cache;
use App\Stage;

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

        Auth::guard('admin')->logout();
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
        $laps = Lap::all();
        //Send the list of laps to the front end`
        return view('admin.add-category', compact('laps'));
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

        $categories = Category::all();
        return view('admin.showcategories', compact('categories'));
    }

    public function showEditCategory(Request $request, $id){
        $category = Category::find($id);
        $laps = Lap::all();
        return view('admin.edit-category', compact('category', 'laps'));
    }

    public function postEditCategory(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'session_id' => 'required|numeric',
            ]);
        $category = Category::find($id);
        $category->name = $request->name;
        $category->description = $request->description;
        $category->session_id = $request->session;
        $category->update($request->all());
        Session::flash('success', "Category Updated  successfully !");
        return redirect()->back();
    }

    public function deleteCategory(Request $request , $id){
        $category = Category::find($id);
        if(count($category) > 0){
            $category->delete();
            Session::flash('success', "Category Deleted  successfully !");
            return redirect()->back();
        }else{
            Session::flash('error', "Error, Category Not Found !");
            return redirect()->back();
        }
    }


    public function viewCreateStage(){
        $laps = Lap::all();
        $categories = Category::all();

        return view('admin.add-stage', compact('laps', 'categories'));
    }

    public function postCreateStage(Request $request){
        $request->validate([
            'name' => 'required',
            'timeframe' => 'numeric',
            'session_id' => 'numeric',
            'category_id' => 'numeric'
        ]);

        $stage = new Stage();
        $stage->name = $request->name;
        $stage->timeframe = $request->timeframe;
        $stage->lap_id = $request->lap_id;
        $stage->category_id = $request->category_id;
        $stage->save();

        Session::flash('success', "Test Stage created successfully !");
        return redirect()->back();

    }

    public function showEditStage(){
        return "this is the edit stagefunction ";
    }

    public function postEditStage(){
        return "this is the edit stage submit";
    }

    public function deleteStage(){
        return "this si the deleteStage function";
    }
    public function viewAllStage(){

        $stages = Stage::all();
        return view('admin.showstages', compact('stages'));
    }


}
