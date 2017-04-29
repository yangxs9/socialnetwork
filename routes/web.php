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

Auth::routes();

Route::get('/', 'HomeController@index');

Route::get('/home', 'HomeController@index');

Route::get('/{username}', 'UsersController@user');

Route::get('/profile/edit', 'ProfilesController@edit');

Route::post('/profile/edit', 'ProfilesController@update');

Route::post('/posts', 'PostsController@update');

// GET POST PATCH DELETE