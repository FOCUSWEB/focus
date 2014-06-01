<?php

/**
 * 使用 PhpStorm 创建.
 * 编码者: FOCUS
 * 日期: 14-6-2
 * 时间: 上午12:40
 */
class Post extends Eloquent
{
	protected $table = 'post';

	public function author()
	{
		return $this->belongsTo('User', 'authorId');
	}
}