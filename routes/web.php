<?php


//Route::get('/','PostController@index');
Route::get('/posts/create','PostController@create');
Route::get('/posts/{post}','PostController@show');
Route::post('/posts/{post}/comment','CommentsController@store');
Route::post('/posts','PostController@store');




Route::get('/', function () {
    return view('layouts.master');
});

Auth::routes();

Route::get('/home', 'PostController@index')->name('home');
