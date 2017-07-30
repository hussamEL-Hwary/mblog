<?php


Route::get('/','PostController@index');
Route::get('/posts/create','PostController@create');
Route::get('/posts/{post}','PostController@show');
Route::post('/posts/{post}/comment','CommentsController@store');
Route::post('/posts','PostController@store');
Auth::routes();
Route::get('/home', 'PostController@index')->name('home');

Route::get('/login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('/login/facebook/callback', 'Auth\LoginController@handleProviderCallback');
