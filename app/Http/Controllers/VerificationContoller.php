<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class VerificationController extends Controller
{


    public function verifyEmail($token){
        $user = User::where('token', $token)->firstOrFail();

        $user->update(['token'=>null]);

        return redirect()->route('home')->with('success', "Account verification successfull");
    }
}
