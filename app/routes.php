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
	$date = "";
	$posts = Post::orderBy('created_at', 'desc')->get();
	return View::make('hello', compact('posts', 'date'));
});
Route::resource('users', 'UsersController');
Route::resource('posts', 'PostsController');
Route::get('login', 'AuthController@create');
Route::get('search', 'PostsController@search');
Route::get('search_by_date', 'PostsController@search_by_date');
Route::post('login', 'AuthController@store');
Route::get('logout', 'AuthController@destroy');
Route::group(array('before' => 'auth'), function()
    {
        \Route::get('elfinder', 'Barryvdh\Elfinder\ElfinderController@showIndex');
        \Route::any('elfinder/connector', 'Barryvdh\Elfinder\ElfinderController@showConnector');
    });
\Route::get('elfinder/tinymce', 'Barryvdh\Elfinder\ElfinderController@showTinyMCE4');