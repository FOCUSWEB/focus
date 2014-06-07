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
	Route::get('/post', 'AdminPostController@listPost');
	Route::get('/post/list', 'AdminPostController@listPost');
	Route::get('/post/view/{id}', 'AdminPostController@viewPost');
	Route::any('/post/edit/{id}', array('as' => 'adminPostEdit', 'uses' => 'AdminPostController@editPost'));
//	分类
	Route::get('/category', 'AdminCategoryController@listCategory');
	Route::get('/category/list', 'AdminCategoryController@listCategory');
	Route::get('/category/view/{id}', 'AdminCategoryController@viewCategory');
	Route::any('/category/edit/{id}', 'AdminCategoryController@editCategory');
	Route::any('/category/create', array('as' => 'adminCategoryCreate',
		'uses' => 'AdminCategoryController@createCategory'));
});

Route::any('admin/login', array('as' => 'adminLogin', function () {
	if (Request::ajax()) {
		//接受请求数据
		$username = Request::get('username');
		$password = Request::get('password');
		//验证请求数据
		$validator = Validator::make(
			array('username' => $username),

			array('username' => 'required|min:5')
		);
		if ($validator->fails()) {
			$result = json_encode(array('status' => 'error','messages'=>$validator->messages()->get('username')));
			return $result;
		}
		if (Auth::attempt(array('username' => $username, 'password' => $password))) {
			$result = json_encode(array('status' => 'success'));
			return $result;
		}
	}
	return View::make('admin.login');
}));
Route::get('admin/logout', function () {
	Auth::logout();
	return Redirect::intended('admin');
});