<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

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

        $user = new User();
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->verification_token = str_random(40);
        $user->picture = "https://randomuser.me/api/portraits/women/13.jpg";
        $user->referral_count = 0;
        $user->referral_bonus = 0.00;
        $user->quiz_funds = 0.00;
        $user->withdrawals = 0.00;
        $user->password = bcrypt($request->password);

        $user->save();

        // $user->sendVerificationEmail();

        Auth::login($user);

        return redirect()->to('/user/dashboard');

    }

    public function showLoginForm(){
        return view('login');
    }

    public function postLoginForm(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect()->route('dashboard');
        }
        return redirect()->back()->withErrors(['email' => 'Email or Password is incorrect']);
    }

    public function showFaq(){
        return view('faq');
    }

    public function showContactUs(){
        return view('contact');
    }

    public function showVerified(){
        return view('verified');
    }

    public function verifyUser(Request $request , $token){
        $user = User::where('verification_token', $token)->firstOrFail()
                ->update(['verification_token'=> null]);
        return redirect()->route('verified');
    }
}
