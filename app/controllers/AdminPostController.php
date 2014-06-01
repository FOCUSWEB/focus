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
}