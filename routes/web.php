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
route::get('/','BaseController@getIndex');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('all','MaintextController@getAll');

Route::post('home','HomeController@postindex');

Route::group(['admin'],function(){
    Route::get('home/admin','HomeController@getAdmin');
});

//Ajax
Route::post('/ajax/product','Ajax\ProductController@postindex');


Route::get('/{url}','MaintextController@getIndex');



