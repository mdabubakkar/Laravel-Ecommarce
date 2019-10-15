<?php

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

//User Routes
Route::group(['as' =>'user.','namespace' => 'User'], function(){
     Route::get('/', 'HomeController@index');
});

//Admin Routes
Route::group(['as' =>'admin.','namespace' => 'Admin'], function(){
     Route::get('admin/home', 'HomeController@index')->name('home');
     Route::get('admin-login', 'Auth\LoginController@showLoginForm')->name('login');
     Route::post('admin-login', 'Auth\LoginController@login');
});

Route::get('/home', 'HomeController@index')->name('home');
