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

    Route::get('about', 'UserController@showAbout')->name('about');
    Route::get('register', 'UserController@showRegisterForm')->name('register');
    Route::post('register', 'UserController@postRegisterForm')->name('register.post');
    Route::get('login', 'UserController@showLoginForm')->name('login');
    Route::post('login', 'UserController@postLoginForm')->name('login.post');
    Route::get('faq', 'UserController@showFaq')->name('faq');
    Route::get('contact', 'UserController@showContactUs')->name('contact');
    Route::get('forgot', 'UserController@showForgotPassword')->name('forgot');
    Route::get('home', 'Auth\UserController@showDashboard')->name('home');

    Route::get('verify/{token}', 'UserController@verifyUser')->name('verify');
    Route::get('verified', 'UserController@showVerified')->name('verified');


});


Route::group(['prefix' => 'user/'], function () {

    Route::get('dashboard','Auth\UserController@showDashboard')->name('dashboard');

    Route::get('notifications','Auth\UserController@showNotificationsPage')->name('notifications');

    Route::get('referrals', 'Auth\UserController@showReferralsPage')->name('referrals');

    Route::get('stages','Auth\UserController@showStagesPage')->name('stages');

    Route::get('test','Auth\UserController@showTestPage')->name('test');

    Route::get('categories','Auth\UserController@showCategories')->name('categories');
    Route::get('logout', 'Auth\UserController@logoutUser')->name('logout');
});


//Admin Routes
Route::group(['prefix' => 'admin/'], function () {
    Route::post('login', 'AdminController@postLoginForm')->name('admin.login.submit');
    Route::get('login', 'AdminController@showLoginForm')->name('admin.login');

    Route::get('home', 'Auth\AdminController@showHome')->name('admin.home');
    Route::get('logout', 'Auth\AdminController@logout')->name('admin.logout');

    //Session action routes
    //Later changed to Laps;
    Route::get('sessions/create', 'Auth\AdminController@viewCreateSession')->name('admin.session.create');
    Route::get('sessions/all', 'Auth\AdminController@viewAllSession')->name('admin.session.all');
    Route::post('sessions/create', 'Auth\AdminController@postCreateSession')->name('admin.session.post');
    Route::get('sessions/edit/{id}', 'Auth\AdminController@showEditSession')->name('admin.session.edit.show');
    Route::post('sessions/edit/{id}', 'Auth\AdminController@postEditSession')->name('admin.session.edit.post');
    Route::get('sessions/delete/{id}', 'Auth\AdminController@deleteSession')->name('admin.session.delete');

    //Category routes
    Route::get('category/create', 'Auth\AdminController@viewCreateCategory')->name('admin.category.create');
    Route::get('category/all', 'Auth\AdminController@viewAllCAtegory')->name('admin.category.all');
    Route::post('category/create', 'Auth\AdminController@postCreateCategory')->name('admin.category.create.post');
    Route::get('category/edit/{id}', 'Auth\AdminController@showEditCategory')->name('admin.category.edit.show');
    Route::post('category/edit/{id}', 'Auth\AdminController@postEditCategory')->name('admin.category.edit.post');
    Route::get('category/delete/{id}', 'Auth\AdminController@deleteCategory')->name('admin.category.delete');

    //Stage routes
    Route::get('stage/create', 'Auth\AdminController@viewCreateStage')->name('admin.stage.create');
    Route::get('stage/all', 'Auth\AdminController@viewAllStage')->name('admin.stage.all');
    Route::post('stage/create', 'Auth\AdminController@postCreateStage')->name('admin.stage.create.post');
    Route::get('stage/edit/{id}', 'Auth\AdminController@showEditStage')->name('admin.stage.edit.show');
    Route::post('stage/edit/{id}', 'Auth\AdminController@postEditStage')->name('admin.stage.edit.post');
    Route::get('stage/delete/{id}', 'Auth\AdminController@deleteStage')->name('admin.stage.delete');

    //Questions routes
    Route::get('question/create', 'Auth\AdminController@viewCreateQuestion')->name('admin.question.create');
    Route::get('question/all', 'Auth\AdminController@viewAllQuestion')->name('admin.question.all');
    Route::post('question/create', 'Auth\AdminController@postCreateQuestion')->name('admin.question.create.post');
    Route::get('question/edit/{id}', 'Auth\AdminController@showEditQuestion')->name('admin.question.edit.show');
    Route::post('question/edit/{id}', 'Auth\AdminController@postEditQuestion')->name('admin.question.edit.post');
    Route::get('question/delete/{id}', 'Auth\AdminController@deleteQuestion')->name('admin.question.delete');


    Route::get('question/show', 'Auth\AdminController@showSelectLapQuestionToView')->name('admin.question.selectLap.show');
    Route::post('question/show', 'Auth\AdminController@postSelectLapCategoryQuestionToView')->name('admin.question.lap.post');
    Route::post('question/show/lap', 'Auth\AdminController@postSelectLapCategoryStageQuestionToView')->name('admin.question.selectCategory.post');
    Route::post('question/show/all', 'Auth\AdminController@postShowQuestionsByStage')->name('admin.question.show.post');
    // Route::get('question/showall/select', 'Auth\AdminController@selectQuestionToView')->name('admin.question.select');
    // Route::post('question/showall/select', 'Auth\AdminController@postSelectQuestionToView')->name('admin.question.select.post');
});
