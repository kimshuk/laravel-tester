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

Route::get('/', 'PageController@index');

Route::get('/posts/create', 'PostController@index');

Route::post('/posts', 'PostController@store');

Route::post('/posts/{post}', 'PostController@show');

Route::get('/tasks', 'TaskController@index');

Route::get('/tasks/{post}', 'TaskController@show');


Route::post('/tasks/{post}/comments', 'CommentsController@store');
