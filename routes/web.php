<?php

Route::group(['middleware'=>'lang'],function(){
    Route::get('/','BaseController@getIndex');
});


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



