<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('index');
})->name('index');

//Main routes
Route::group(['prefix' => '/'], function () {


    Route::get('about', function () {
        return view('about');
    })->name('about');

    Route::get('register', function () {
        return view('register');
    })->name('register');

    Route::get('login', function () {
        return view('login');
    })->name('login');

    Route::get('faq', function () {
        return view('faq');
    })->name('faq');

    Route::get('contact', function () {
        return view('contact');
    })->name('contact');
});


Route::group(['prefix' => 'user/'], function () {

    Route::get('dashboard', function () {
        return view('user.dashboard');
    })->name('dashboard');

    Route::get('notifications', function () {
        return view('user.notifications');
    })->name('notifications');

    Route::get('referrals', function () {
        return view('user.referrals');
    })->name('referrals');

    Route::get('stages', function () {
        return view('user.stages');
    })->name('stages');

    Route::get('test', function () {
        return view('user.test');
    })->name('test');

    Route::get('categories', function () {
        return view('user.categories');
    })->name('categories');
});


//Admin Routes


Route::group(['prefix' => 'admin/'], function() {
    Route::get('login', function(){
        return view('admin.login');
    });

    Route::get('home', function(){
        return view('admin.index');
    });
});
