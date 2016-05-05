<?php

Route::get('/fullstack', function () {
    return view('fullstack');
});

Route::get('/netty', function () {
    return view('netty');
});

// Route::get('/admin/comment', function () {
//     return view('admin.comment.index');
// });
// Route::get('/admin/comment/category', function () {
//     return view('admin.comment.list');
// });
// Route::get('/admin/comment/notification', function () {
//     return view('admin.comment.notification');
// });

Route::get('/admin/webboard', function () {
    return view('admin.webboard.index');
});
Route::get('/admin/webboard/category', function () {
    return view('admin.webboard.list');
});
Route::get('/admin/webboard/notification', function () {
    return view('admin.webboard.notification');
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
            // Route::post('content/comment', 'ContentController@store')->name('content-comment');
            // Route::post('content/comment/{commentID}', 'ContentController@update')->name('content-comment-edit');
        });

        Route::resource('content/comment', 'ContentController');
    });

    // Admin
    Route::group(['middleware' => 'backOffice'], function () {
        // Disable Comment on Content
        Route::post('disableComment/{commentID}', 'Admin\CommentController@disableComment');

        Route::group(['prefix' => 'admin'], function () {
            // DashBoard
            Route::resource('', 'Admin\BackOfficeController');

            // Profile & Manage member
            Route::get('profile', 'Admin\BackOfficeController@profile');
            Route::resource('member', 'Admin\UserController');

            // All Catg
            Route::resource('catg-content' , 'Admin\CatgContentController');
            Route::resource('catg-ads'     , 'Admin\CatgAdsController');
            Route::resource('catg-webboard', 'Admin\CatgWebboardController');

            // Content, Topic, Advertise, Banner
            Route::resource('content'  , 'Admin\ContentController');
            Route::resource('advertise', 'Admin\AdvertiseController');
            Route::resource('banner'   , 'Admin\BannerController');

            // Comment
            Route::resource('comment', 'Admin\CommentController');


            // Switch Status
            Route::post('advertise/changeStatus/{adsId}', 'Admin\AdvertiseController@changeStatus');
            Route::post('content/changeStatus/{contentId}', 'Admin\ContentController@changeStatus');
            Route::post('member/changeStatus/{userId}', 'Admin\UserController@changeStatus');
        });
    });
});
