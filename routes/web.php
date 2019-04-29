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

    //Session action routes
    //Later changed to Laps;
    Route::get('sessions/create', 'Auth\AdminController@viewCreateSession')->name('admin.session.create');
    Route::get('sessions/all', 'Auth\AdminController@viewAllSession')->name('admin.session.all');
    Route::post('sessions/create', 'Auth\AdminController@postCreateSession')->name('admin.session.post');

    //Category routes
    Route::get('category/create', 'Auth\AdminController@viewCreateCategory')->name('admin.category.create');
    Route::get('category/all', 'Auth\AdminController@viewAllCAtegory')->name('admin.category.all');
    Route::post('category/create','Auth\AdminController@postCreateCategory')->name('admin.category.create.post');
    Route::get('category/edit/{id}', 'Auth\AdminController@showEditCategory')->name('admin.category.edit.show');
    Route::post('category/edit/{id}', 'Auth\AdminController@postEditCategory')->name('admin.category.edit.post');
    Route::get('category/delete/{id}', 'Auth\AdminController@deleteCategory')->name('admin.category.delete');

    //Stage routes
    Route::get('stage/create', 'Auth\AdminController@viewCreateStage')->name('admin.stage.create');
    Route::get('stage/all', 'Auth\AdminController@viewAllStage')->name('admin.stage.all');
    Route::post('stage/create','Auth\AdminController@postCreateStage')->name('admin.stage.create.post');
    Route::get('stage/edit/{id}', 'Auth\AdminController@showEditStage')->name('admin.stage.edit.show');
    Route::post('stage/edit/{id}', 'Auth\AdminController@postEditStage')->name('admin.stage.edit.post');
    Route::get('stage/delete/{id}', 'Auth\AdminController@deleteStage')->name('admin.stage.delete');

    //Questions routes
    Route::get('question/create', 'Auth\AdminController@viewCreateQuestion')->name('admin.question.create');
    Route::get('question/all', 'Auth\AdminController@viewAllQuestion')->name('admin.question.all');
    Route::post('question/create','Auth\AdminController@postCreateQuestion')->name('admin.question.create.post');
    Route::get('question/edit/{id}', 'Auth\AdminController@showEditQuestion')->name('admin.question.edit.show');
    Route::post('question/edit/{id}', 'Auth\AdminController@postEditQuestion')->name('admin.question.edit.post');
    Route::get('question/delete/{id}', 'Auth\AdminController@deleteQuestion')->name('admin.question.delete');



});
