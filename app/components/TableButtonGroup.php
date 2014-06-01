<?php

/**
 * 使用 PhpStorm 创建.
 * 编码者: FOCUS
 * 日期: 14-6-2
 * 时间: 上午12:56
 */
class TableButtonGroup
{
	public $buttons = array();

	public function make()
	{
		$this->renderButtons();
	}

	private function renderButtons()
	{
		if (is_array($this->buttons)) {
			echo '<div class="button-group">';
			foreach ($this->buttons as $button) {
				if (is_array($button)) {
					echo HtmlHelper::link($button['url'], $button['label'], array('class' => ('btn btn-' .
							$button['type'])));
				}
			}
			echo '</div>';
		}
	}
}