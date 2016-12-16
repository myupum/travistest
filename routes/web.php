<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/hello',  'HelloController@index');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/article',  'ArticleController@index');

Route::get('/article/create',  'ArticleController@create');

Route::post('/article/store',  'ArticleController@store');

Route::get('/article/complete',  'ArticleController@complete');

Route::get('/article/edit/{id}',  'ArticleController@edit');

//Route::get('/hello', function () {
//    return view('hello.index');
//});

Route::get('/users',  'UsersController@index');
Route::get('/users/show',  'UsersController@show');
Route::post('/users/store',  'UsersController@store');
Route::put('/users/update',  'UsersController@update');
Route::delete('/users/destroy',  'UsersController@destroy');
