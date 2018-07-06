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

Route::get('/posts/create', 'PageController@create');

Route::post('/posts', 'PostsController@store');

Route::get('/tasks', 'TaskController@index');

Route::get('/tasks/{task}', 'TaskController@show');

//Route::get('/tasks/{task}', 'TaskController@show');
