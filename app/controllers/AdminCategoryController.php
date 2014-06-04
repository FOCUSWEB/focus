<?php

/**
 * Created by PhpStorm.
 * User: focus
 * Date: 14-6-5
 * Time: 1:54
 */
class AdminCategoryController extends AdminController
{
	public function listCategory()
	{
		$categories = Category::all();
		return View::make('admin.listCategory', array('categories' => $categories));
	}

	public function createCategory()
	{
		$category = new Category();
		if (Request::isMethod('POST')) {
			$category->setRawAttributes(Input::except('_token'));
			if ($category->save()) {
				return Redirect::to('admin/category/view/' . $category->id);
			}
		}
		return View::make('admin.createCategory', array('category' => $category));
	}

	public function editCategory()
	{
		return View::make('admin.editCategory');
	}

	public function viewCategory()
	{
		return View::make('admin.viewCategory');
	}

	public function deleteCategory()
	{
		return true;
	}
}