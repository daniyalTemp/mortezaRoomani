<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('Frontend.welcome');
//});

//panel
Route::namespace('App\Http\Controllers\front')->group(function () {
    Route::get('/', 'homeController@index')->name('index');

//    Route::prefix('config')->group(function () {
//        Route::get('/', 'configController@show')->name('dashboard.config.show');
//        Route::post('/', 'configController@save')->name('dashboard.config.save');
//
//    });
});


Route::get('/login', 'App\Http\Controllers\admin\AuthController@login')->name('login');
Route::get('/logout', 'App\Http\Controllers\admin\AuthController@logout')->name('logout');
Route::post('/login', 'App\Http\Controllers\admin\AuthController@doLogin')->name('doLogin');


//panel
Route::prefix('panel')->middleware('auth')->namespace('App\Http\Controllers\admin')->group(function () {
    Route::get('/', 'dashboardController@index')->name('dashboard.index');

    Route::prefix('config')->group(function () {
        Route::get('/', 'configController@show')->name('dashboard.config.show');
        Route::post('/', 'configController@save')->name('dashboard.config.save');

    });
    Route::prefix('post')->group(function () {
        Route::get('/', 'postController@list')->name('dashboard.post.list');
        Route::get('/add', 'postController@add')->name('dashboard.post.add');
        Route::get('/edit/{id}', 'postController@edit')->name('dashboard.post.edit');
        Route::get('/delete/{id}', 'postController@delete')->name('dashboard.post.del');
        Route::post('/addSave/{id}', 'postController@addSave')->name('dashboard.post.addSave');
    });


});

