<?php
header('Access-Control-Allow-Origin: *');
header( 'Access-Control-Allow-Headers: Authorization, Content-Type' );
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
// Backend system //
//=================================================================//
Route::get('backend', function () {
    if (Auth::guard('admin')->guest()) {
        return redirect('backend/login');
    } else {
        return redirect('backend/dashboard');
    }
});
Route::resource('backend/login', 'Backend\AuthController');

Route::group(['middleware'=>'admin','prefix' => 'backend'], function () {
    Route::resource('dashboard', 'Backend\DashboardController');
    Route::resource('category', 'Backend\CategoryController');
	Route::post('content/sortable','Backend\ContentController@sortable');
    Route::post('content/upload','Backend\ContentController@upload');
    Route::resource('content', 'Backend\ContentController');


    // SETTING MENU //
    Route::post('setting/language/checker', 'Backend\LangController@checker');
    Route::resource('setting/language', 'Backend\LangController');
    Route::resource('setting/user','Backend\UserController');

    // Manage Administrator page //
    Route::get('user/profile', 'Backend\UserController@getProfile');
    Route::post('user/profile', 'Backend\UserController@postProfile');
    Route::post('user/checker', 'Backend\UserController@checker');
    Route::get('logout','Backend\UserController@logout');
});

//:: FRONT END SYSTEM AND TEMPLATE LAYOUT :://
//::=====================================================================================:://
Route::get('/','Front\PageController@index');
Route::get('index','Front\PageController@index');
Route::get('category','Front\PageController@category');
Route::get('playlist','Front\PageController@playlist');
Route::get('singleplay/{id?}','Front\PageController@singleplay');