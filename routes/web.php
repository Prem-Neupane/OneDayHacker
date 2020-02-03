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
    return view('frontend.index');
});

Auth::routes();
Route::group(['middleware' => ['auth'] ], function () {
    Route::get('/dashboard', 'HomeController@index')->name('dashboard');
    route::resource('dashboard/users','UserController');
    Route::resource('dashboard/place','PlaceController');
    Route::get('logout', 'UserController@logout')->name('logout');
});

//for frontend
route::get('/guide/{id}','FrontendController@get_guide');
route::get('/place/{id}','FrontendController@get_place');
