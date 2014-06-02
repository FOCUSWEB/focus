<?php

/**
 * 使用 PhpStorm 创建.
 * 编码者: FOCUS
 * 日期: 14-6-1
 * 时间: 下午11:21
 */
class Menu
{

	public $menuOptions = array();
	public $menuWrapperType = 'ul';

	public $listOptions = array();

	public $listActiveCssClass = 'active';
	public $items = array();
	public $subMenuOptions = array();

	public function make()
	{
		echo '<' . $this->menuWrapperType . ' ' . HtmlHelper::resloveOptions($this->menuOptions) . '>';
		if (count($this->items)) {
			$this->renderItems($this->items);
		}
		echo '</' . $this->menuWrapperType . '>';
	}


	private function renderItems($items)
	{
		foreach ($items as $item) {
			if (is_array($item)) {
				$label = '';
				if (isset($item['icon'])) {
					$label .= '<i class="fa fa-' . $item['icon'] . '"></i><span class="sidebar-text">' . $item['label'] .
						'</span>';
				} else {
					$label .= '<span class="sidebar-text">' . $item['label'] . '</span>';
				}
				$itemClass = ' class="';
				if (isset($item['items'])) {
					$label .= '<span class="fa arrow"></span>';
					$itemClass .= 'hasSub ';
				}
				if (isset($item['active'])) {
					if (is_array($item['active'])) {
						foreach ($item['active'] as $itemActive) {
							if (Route::getCurrentRoute()->uri() == $itemActive) {
								$itemClass .= $this->listActiveCssClass;
							}
						}
					}
				}
				$itemClass .= ' "';
				$itemClass == ' class=""' ? $itemClass = '' : '';
				echo '<li' . $itemClass . '>' . HtmlHelper::link($item['url'], $label);
				if (isset($item['items'])) {
					$this->renderSubMenu($item['items']);
				}
				echo '</li>';
			} else {
				echo '<li>' . $item . '</li>';
			}
		}
	}

	private function renderSubMenu($items)
	{
		if (is_array($items)) {
			$subMenu = new Menu();
			$subMenu->menuOptions = array('class' => 'submenu');
			$subMenu->listActiveCssClass = 'current active';
			$subMenu->items = $items;
			$subMenu->make();
		}
	}
}