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

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('category/', function () {
//     return view('category');
// });

// Route::get('detail/', function () {
//     return view('detail');
// });

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

// Route::group(['middleware' => ['web']], function () {
//     //
// });

// Route::group(['prefix' => 'ohm'], function () {
    Route::group(['middleware' => 'web'], function () {
        Route::auth();

        Route::get('', 'HomeController@index');
        Route::get('{category_name}', 'CategoryController@index')->name('category');
        Route::get('content/{content_name}', 'ContentController@index')->name('content');
  });
// });
