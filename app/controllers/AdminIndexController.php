<?php

/**
 * 使用 PhpStorm 创建.
 * 编码者: FOCUS
 * 日期: 14-5-31
 * 时间: 下午11:38
 */
class AdminIndexController extends AdminController
{
	public function dashboard()
	{
		return View::make('admin.dashboard');
	}
}