<?php

/**
 * 使用 PhpStorm 创建.
 * 编码者: FOCUS
 * 日期: 14-6-9
 * 时间: 上午1:13
 */
class FHtml extends \Illuminate\Support\Facades\HTML
{
	public static function link($label = '', $url = '#', $options = array())
	{
		return '<a href="'.$url.'"'.self::resolveHtmlOptions($options).'>'.$label.'</a>';
	}

	public static function openTag($tagName, $htmlOptions = array())
	{
		$options = self::resolveHtmlOptions($htmlOptions);
		return "<" . $tagName . " " . $options . ">";
	}

	public static function closeTag($tagName)
	{
		return "</" . $tagName . ">";
	}

	private static function resolveHtmlOptions($htmlOptions)
	{
		$options = "";
		if (is_array($htmlOptions) && count($htmlOptions)) {
			foreach ($htmlOptions as $key => $value) {
				$options .= ' ' . $key . '="' . $value . '"';
			}
		}
		return $options;
	}
}