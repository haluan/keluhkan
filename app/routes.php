<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	$posts = Post::all();
	return View::make('hello', compact('posts'));
});
Route::resource('users', 'UsersController');
Route::resource('posts', 'PostsController');
Route::get('login', 'AuthController@create');
Route::get('search', 'PostsController@search');
Route::post('login', 'AuthController@store');
Route::get('logout', 'AuthController@destroy');