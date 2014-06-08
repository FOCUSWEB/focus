<?php

/**
 * 使用 PhpStorm 创建.
 * 编码者: FOCUS
 * 日期: 14-6-9
 * 时间: 上午1:15
 */
class FSidebar
{
	public $htmlOptions = array();
	public $items = array();

	public function make()
	{
		echo FHtml::openTag('ul', $this->htmlOptions);
		$this->render();
		echo FHtml::closeTag('ul');
	}

	private function render()
	{
		if (is_array($this->items) && count($this->items)) {
			foreach ($this->items as $item) {
				$options = array();
				if (isset($item['active']) && $item['active']) {
					$options['class'] = 'active';
				}
				echo FHtml::openTag('li', $options);
				$icon = '';
				if (isset($item['icon'])) {
					$icon .= '<i class="fa fa-' . $item['icon'] . ' icon-sidebar"></i>';
				}
				echo FHtml::link($icon . $item['label'], $item['url']);
				echo FHtml::closeTag('li');
			}
		}
	}
}