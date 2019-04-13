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
    Route::post('login', 'AdminController@postLoginForm')->name('admin.login.submit');
    Route::get('login', 'AdminController@showLoginForm')->name('admin.login');

    Route::get('home', 'Auth\AdminController@showHome')->name('admin.home');
    Route::get('logout', 'Auth\AdminController@logout')->name('admin.logout');

    //Other administrativec functions
    Route::get('sessions/create', 'Auth\AdminController@createSession')->name('admin.session.create');
    Route::get('sessions/all', 'Auth\AdminController@viewAllSession')->name('admin.session.all');

    //Category routes
    Route::get('category/create', 'Auth\AdminController@createCategory')->name('admin.category.create');
    Route::get('category/all', 'Auth\AdminController@viewAllCAtegory')->name('admin.category.all');
});
