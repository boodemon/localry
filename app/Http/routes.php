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
	Route::get('content/image-delete/{id?}','Backend\ContentController@imageDelete');
    Route::post('content/upload','Backend\ContentController@upload');
    Route::resource('content', 'Backend\ContentController');
    Route::resource('playlist','Backend\PlaylistController');
    //Ajax search //
    Route::post('video-search','Backend\PlaylistController@searchVideo');
    Route::post('video-add','Backend\PlaylistController@addVideo');
    Route::get('video-remove/{id?}','Backend\PlaylistController@removeVideo');

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
Route::get('article/{type?}','Front\PageController@article');
Route::get('category/{id?}/{subject?}','Front\PageController@category');
Route::get('playlist','Front\PageController@playlist');
Route::get('singleplay/{id?}/{subject?}','Front\PageController@singleplay');

// :: Profile Page ::/
Route::get('profile/following/playlist','Front\PageController@profileFollowingPlaylist');
Route::get('profile/following/series','Front\PageController@profileFollowingSeries');
Route::get('profile/following/categories','Front\PageController@profileFollowingCategories');
Route::get('profile/community/find-people','Front\PageController@profileCommunityFindpeople');
Route::get('profile/community/you-follow','Front\PageController@profileCommunityYoufollow');
Route::get('profile/community/follower','Front\PageController@profileCommunityFollower');
Route::get('profile/my-playlist','Front\PageController@profileMyPlaylist');
Route::get('profile/edit-playlist','Front\PageController@profileEditPlaylist');
Route::get('profile/my-loved','Front\PageController@profileMyLoved');
Route::get('profile/recently-watched','Front\PageController@profileRecentlyWatched');
Route::get('profile/my-settings/profile','Front\PageController@profileSettingProfile');
Route::get('profile/my-settings/notifications','Front\PageController@profileSettingNoti');
Route::get('profile/my-settings/email','Front\PageController@profileSettingEmail');
Route::get('profile/my-settings/connections','Front\PageController@profileSettingConnection');
Route::get('profile/my-settings/account','Front\PageController@profileSettingAccount');
Route::get('member','Front\PageController@publicProfile');








// :: AUTH FOR FRONT END
Route::get('login','Front\AuthController@login');
Route::get('register','Front\AuthController@register');
Route::get('forgot','Front\AuthController@forgot');
