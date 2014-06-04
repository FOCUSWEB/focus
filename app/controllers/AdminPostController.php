<?php

/**
 * 使用 PhpStorm 创建.
 * 编码者: FOCUS
 * 日期: 14-6-1
 * 时间: 上午12:59
 */
class AdminPostController extends AdminController
{
	public function listPost()
	{
		$posts = Post::all();
		return View::make('admin.listPost', array('posts' => $posts));
	}

	public function viewPost($id)
	{
		$post = Post::find($id);
		return View::make('admin.viewPost', array('post' => $post));
	}

	public function editPost($id)
	{
		$post = Post::find($id);
		if (Request::isMethod('POST')) {
			$validator = Validator::make(
				array(
					'title' => Input::get('title'),
					'content' => Input::get('content'),
				),
				array(
					'title' => 'required|min:4',
					'content' => 'required|min:20',
				)
			);
			if ($validator->fails()) {
				return Redirect::to('admin/post/edit/' . $id)->withErrors($validator);
			}
			$post->setRawAttributes(Input::except('_token'));

			if ($post->save()) {
				return Redirect::to('admin/post/view/' . $id);
			}
		}
		$userList = array();
		$categoryList = array();
		foreach (User::all() as $user) {
			$userList[$user->id] = $user->username;
		}
		foreach (Category::all() as $category) {
			$categoryList[$category->id] = $category->name;
		}
		return View::make('admin.editPost', array('post' => $post, 'userList' => $userList, 'categoryList' => $categoryList));
	}
}