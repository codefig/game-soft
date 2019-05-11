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
use App\Question;
use Illuminate\Support\Facades\DB;

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

    public function showEditSession(Request $request, $id){
        $lap = Lap::find($id);
        return view('admin.edit-session', compact('lap'));

    }

    public function postEditSession(Request $request, $id){
        $lap = Lap::find($id);
        //check if the current lap is meant to be the activec one
        if($request->status == 1){

            DB::update('update laps set status = 0 where id != ?', ["$id"]);
        }
        $lap->update($request->all());
        Session::flash('success', "Test Lap  updated successfully !");
        return redirect()->back();
    }

    public function deleteSession(Request $request, $id){
        $lap = Lap::findOrFail($id);
        $lap->delete();
        Session::flash('success', "Lap deleted successfully !");
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
            'timeframe' => 'required|numeric',
            'lap_id' => 'required|numeric',
            'category_id' => 'required|numeric',
            'pass_value' => 'required|numeric',
        ]);

        $stage = new Stage();
        $stage->name = $request->name;
        $stage->timeframe = $request->timeframe;
        $stage->lap_id = $request->lap_id;
        $stage->category_id = $request->category_id;
        $stage->pass_value = $request->pass_value;
        $stage->save();

        Session::flash('success', "Test Stage created successfully !");
        return redirect()->back();

    }

    public function showEditStage(Request $request , $id){
        $stage = Stage::find($id);
        $categories = Category::all();
        $laps = Lap::all();
        return view('admin.edit-stage', compact('stage', 'categories', 'laps'));
    }

    public function postEditStage(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'timeframe' => 'required',
            'lap_id' => 'required|numeric',
            'category_id' => 'required|numeric',
            'pass_value' => 'required|numeric'
            ]);
        $stage = Stage::find($id);
        $stage->name = $request->name;
        $stage->timeframe = $request->timeframe;
        $stage->lap_id = $request->lap_id;
        $stage->category_id = $request->category_id;
        $stage->pass_value = $request->pass_value;
        $stage->update($request->all());
        Session::flash('success', "stage Updated  successfully !");
        return redirect()->back();
    }

    public function deleteStage(Request $request, $id){

        $stage = Stage::find($id);

        if(count($stage) > 0){
            $stage->delete();
            Session::flash('success', "Stage Deleted  successfully !");
            return redirect()->back();
        }else{
            Session::flash('error', "Error, Stage Not Found !");
            return redirect()->back();
        }
    }

    public function viewAllStage(){
        $stages = Stage::all();
        return view('admin.showstages', compact('stages'));
    }

    public function viewCreateQuestion(){
        $stages = Stage::all();
        $categories = Category::all();
        return view('admin.add-question', compact('stages', 'categories'));
    }

    public function postCreateQuestion(Request $request){
        // return "this is the post create question";
        $request->validate([
            'content' => 'required',
            'a' => 'required',
            'b' => 'required',
            'c' => 'required',
            'd' => 'required',
            'correct' => 'required',
            'stage_id' => 'required',
        ]);

        $question = new Question();
        $question->content = $request->content;
        $question->a = $request->a;
        $question->b = $request->b;
        $question->c = $request->c;
        $question->d = $request->d;
        $question->correct = $request->correct;
        $question->stage_id = $request->stage_id;
        $question->save();

        Session::flash('success', "Question Added to Stage successfully !");
        return redirect()->back();
    }


    public function viewAllQuestion(){

        return 'this is the veiw all questions ';
    }


    public function showSelectLapQuestionToView(){
        $laps = Lap::all();

        return view('admin.view-question-lap', compact('laps'));
    }

    public function postSelectLapCategoryQuestionToView(Request $request){
        $categories = Category::where('session_id', $request->lap_id)->get();
        if(!$categories) {
            Session::flash('error ', "There are no added categories for chosen lap !");
            return redirect()->back();
        }
        $lap_id = $request->lap_id;
       return view('admin.view-question-category', compact('categories', 'lap_id'));
    }

    public function postSelectLapCategoryStageQuestionToView(Request $request){
        $stages = Stage::where('category_id', $request->category_id)
                            ->where('lap_id', $request->lap_id)
                            ->get();
        if(!$stages) {
            Session::flash('error ', "There are no added stages for chosen category !");
            return redirect()->back();
        }
        return view('admin.view-question-stage', compact('stages'));
    }

    public function postShowQuestionsByStage(Request $request){
        $questions = Question::where('stage_id', $request->stage_id)->get();
        if(!$questions){
            Session::flash('error ', "There are no added questions for selected stage !");
            return redirect()->back();
        }
        return view('admin.showquestions', compact('questions'));

    }

    public function selectQuestionToView(){
        $laps = Lap::all();
        $categories = Category::all();
        $stages = Stage::all();

        return view('admin.view-questions', compact('stages', 'categories', 'laps'));
    }

    public function postSelectQuestionToView(Request $request){

        $request->validate([
            'lap_id' => 'required|numeric',
            'stage_id' => 'required|numeric',
            'category_id' => 'required|numeric',
        ]);

        // return $request->all();

        //Get the correct stage;
        $stage = Stage::where('lap_id', '=', $request->lap_id)
                        ->where('id', '=', $request->stage_id)
                        ->where('category_id', '=', $request->category_id)
                        ->first();
        if($stage){
            $questions = Question::where('stage_id', $request->stage_id)->get();
            return $questions;
        }
        else{
            Session::flash('error', "There are no questions for the selected session!");
            return redirect()->back();
        }



    }
    public function showEditQuestion(Request $request, $id){
        $question = Question::find($id);
        return view('admin.editquestion', compact('question'));

    }

    public function postEditQuestion(Request $request){
       $question = Question::find($request->id);
       $question->update($request->all());
       if(!$question){
           Session::flash('error', "There is no question with that Id");
           return redirect()->bac();
       }
       Session::flash('success', "QUestion Updated updated!");
       return redirect()->back();

    }

    public function deleteQuestion(Request $request, $id){

        $question = Question::find($id);


        if(!$question){
            Session::flash('error', "Question with that id, does not exist!");
            return redirect()->route("admin.question.selectLap.show");
        }
        $question->delete();
        Session::flash('success', "Question deleted Successfully!");
        return redirect()->route("admin.question.selectLap.show");

    }


}
