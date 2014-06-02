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

Route::get('/', function () {
	return View::make('hello');
});
Route::group(array('before' => 'auth'), function () {
//	首页仪表盘
	Route::get('admin', 'AdminIndexController@dashboard');
	Route::get('admin/dashboard', 'AdminIndexController@dashboard');
//	文章
	Route::get('admin/post', 'AdminPostController@listPost');
	Route::get('admin/post/list', 'AdminPostController@listPost');
	Route::get('admin/post/view/{id}', 'AdminPostController@viewPost');
	Route::any('admin/post/edit/{id}', array('as' => 'adminPostEdit', 'uses' => 'AdminPostController@editPost'));
});

Route::any('admin/login', array('as' => 'adminLogin', function () {
	if (Input::has('username') && Input::has('password')) {
		$username = Input::get('username');
		$password = Input::get('password');
		if (Auth::attempt(array('username' => $username, 'password' => $password))) {
			return Redirect::intended('admin');
		}
	}
	return View::make('admin.login');
}));
Route::get('admin/logout', function () {
	Auth::logout();
	return Redirect::intended('admin');
});