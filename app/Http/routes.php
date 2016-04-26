<?php
/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::get('/admin/member', function () {
    return view('admin.member.index');
});

Route::get('/admin/member/insert', function () {
    return view('admin.member.insertupdate');
});


Route::get('/admin/banner', function () {
    return view('admin.banner.index');
});
Route::get('/admin/banner/insert', function () {
    return view('admin.banner.insertupdate');
});

Route::get('/admin/webboard', function () {
    return view('admin.webboard.index');
});
Route::get('/admin/webboard/category', function () {
    return view('admin.webboard.list');
});
Route::get('/admin/webboard/notification', function () {
    return view('admin.webboard.notification');
});
Route::get('/admin/comment', function () {
    return view('admin.comment.index');
});
Route::get('/admin/comment/category', function () {
    return view('admin.comment.list');
});
Route::get('/admin/comment/notification', function () {
    return view('admin.comment.notification');
});

Route::group(['middleware' => 'web'], function () {
    // Login
    Route::auth();
    Route::get('auth/facebook', 'Auth\AuthController@redirectToProvider');
    Route::get('auth/facebook/callback', 'Auth\AuthController@handleProviderCallback');

    // Guest
    Route::get('', 'HomeController@index')->name('home');
    Route::get('category/{category_name}', 'CategoryController@index')->name('category');
    Route::get('content/{content_name}', 'ContentController@index')->name('content');
    Route::post('content/comment', 'ContentController@store')->name('content-comment');
    Route::get('search', 'ListContentController@searchContent')->name('search-content');

    // User
    Route::group(['middleware' => 'user'], function () {
        Route::get('profile', 'HomeController@profile');

        Route::group(['prefix' => 'webboard'], function () {
            Route::get('', 'WebBoardController@allChannel')->name('all_channel');
            Route::get('{channel}', 'WebBoardController@index')->name('webboard');
            Route::get('create/newtopic', 'WebBoardController@newTopic')->name('new_topic');
            Route::get('detail/{topic_id}', 'WebBoardController@detail')->name('read_topic');

            Route::post('create', 'WebBoardController@store')->name('create_topic');
            Route::post('comment', 'ContentController@store')->name('webboard-comment');
        });
    });

    // Admin
    Route::group(['middleware' => 'backOffice'], function () {
        Route::group(['prefix' => 'admin'], function () {
            // DashBoard
            Route::resource('', 'Admin\BackOfficeController');

            // Profile
            Route::get('profile', 'Admin\BackOfficeController@profile');

            // All Catg
            Route::resource('catg-content' , 'Admin\CatgContentController');
            Route::resource('catg-ads'     , 'Admin\CatgAdsController');
            Route::resource('catg-webboard', 'Admin\CatgWebboardController');

            // Content, Topic, Advertise
            Route::resource('content'  , 'Admin\ContentController');
            Route::resource('advertise', 'Admin\AdvertiseController');

            Route::post('advertise/changeStatus/{adsId}', 'Admin\AdvertiseController@changeStatus');
            Route::post('content/changeStatus/{contentId}', 'Admin\ContentController@changeStatus');
        });
    });
});
