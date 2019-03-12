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

Route::get('/about', function(){
    return view('about');
})->name('about');

Route::get('/register', function(){
    return view('register');
})->name('register');

Route::get('/login', function(){
    return view('login');
})->name('login');

Route::get('/faq', function(){
    return view('faq');
})->name('faq');

Route::get('/dashboard', function(){
    return view('dashboard');
})->name('dashboard');

Route::get('/contact', function(){
    return view('contact');
})->name('contact');

Route::get('/notifications', function(){
    return view('notifications');
})->name('notifications');

Route::get('/referrals', function(){
    return view('referrals');
})->name('referrals');

Route::get('/stages', function(){
    return view('stages');
})->name('stages');

Route::get('/test', function(){
    return view('test');
})->name('test');

Route::get('/categories', function(){
    return view('categories');
})->name('categories');
