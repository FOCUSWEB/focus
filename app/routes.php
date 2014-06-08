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
Route::group(array('prefix' => 'admin', 'before' => 'auth'), function () {
//	首页仪表盘
	Route::get('/', array('as' => 'adminDashboard', 'uses' => 'AdminIndexController@dashboard'));
	Route::get('/dashboard', 'AdminIndexController@dashboard');
//	文章
	Route::group(array('prefix' => 'post'), function () {
		Route::get('/', array('as' => 'adminPost', 'uses' => 'AdminPostController@listPost'));
		Route::get('/list', array('as' => 'adminPostList', 'uses' => 'AdminPostController@listPost'));
		Route::get('/view/{id}', 'AdminPostController@viewPost');
		Route::any('/edit/{id}', array('as' => 'adminPostEdit', 'uses' => 'AdminPostController@editPost'));
	});
//	分类
	Route::get('/category', 'AdminCategoryController@listCategory');
	Route::get('/category/list', 'AdminCategoryController@listCategory');
	Route::get('/category/view/{id}', 'AdminCategoryController@viewCategory');
	Route::any('/category/edit/{id}', 'AdminCategoryController@editCategory');
	Route::any('/category/create', array('as' => 'adminCategoryCreate',
		'uses' => 'AdminCategoryController@createCategory'));
});

Route::get('admin/login', array('as' => 'adminLogin', function () {
	return View::make('admin.login');
}));

Route::post('admin/login', array('as' => 'adminLogin', function () {

	$rules = array(
		'username' => 'required|min:5',
		'password' => 'required|min:5',
	);
	$validator = Validator::make(
		Input::all(),
		$rules
	);
	$validator->setAttributeNames(array(
		'username' => '用户名',
		'password' => '密码',
	));
	if ($validator->fails()) {
		return Redirect::route('adminLogin')->withErrors($validator);
	}
	if (Auth::attempt(array('username' => Input::get('username'), 'password' => Input::get('password')))) {
		return Redirect::intended('admin');
	}
}));

Route::get('admin/logout', function () {
	Auth::logout();
	return Redirect::intended('admin');
});