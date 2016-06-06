<?php


Route::get('/', 'HomeController@index');
Route::get('/video', 'HomeController@show');

Route::get('/profile', 'UserController@profile');
Route::post('/profile', 'UserController@update_avatar');
Route::auth();

Route::get('/home', 'HomeController@index');
