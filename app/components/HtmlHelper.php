<?php

/**
 * 使用 PhpStorm 创建.
 * 编码者: FOCUS
 * 日期: 14-6-1
 * 时间: 下午11:15
 */
class HtmlHelper
{
	public static function link($url, $label, $options = array())
	{
		return '<a href="' . $url . '" ' . self::resloveOptions($options) . '>' . $label . "</a>";
	}

	public static function resloveOptions($options)
	{
		$result = '';
		if (is_array($options)) {
			foreach ($options as $key => $value) {
				$result .= $key . '="' . $value . '"';
			}
		}
		return $result;
	}
}