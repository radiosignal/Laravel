<?php

namespace App\Http\Controllers\Categories;
use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Categories;
use function view;

class CategoriesController extends Controller
{
    public function index()
    {
        return view('categories.index');
    }

    public function categories()
    {
        $category = Categories::getCategories();

        return view('categories.categories')->with('category', $category);

    }

    public function aCategory($id)
    {
        $category = Categories::getCategory($id);


        return view('categories.oneCategory')->with('category', $category);
    }
}
