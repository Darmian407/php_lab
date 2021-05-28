<?php

namespace App\Controllers;

class Categories extends BaseController {
    public function index (){
        $categoryModel = new \App\Models\CategoryModel();
		$categories = $categoryModel->getCategories(null);

		return view('category', ['categories' => $categories]);
    }
}