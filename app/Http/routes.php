<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

// past the post number to route
Route::get('/post/{id}', function($id){
	return "This is post number " . $id;
});

Route::get('/admin/posts/example', array('as'=>'admin.home', function() {
	$url = route('admin.home');
	return "this url is " . $url;
}));

Route::get('/post', 'PostsController@index');