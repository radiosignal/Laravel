<?php

namespace App\Http\Controllers\Categories;
use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Category;
use App\Models\News;
use Illuminate\Support\ValidatedInput;
use Ramsey\Uuid\Exception\TimeSourceException;
use function view;

class CategoriesController extends Controller
{
    public function index()
    {
        return view('categories.index');
    }

    public function categories(Category $category)
    {


        return view('news.categories')->with('categories', $category->getCategories());

    }
//
//    public function aCategory($id)
//    {
//        $category = Categories::getCategory($id);
//
//
//        return view('categories.oneCategory')->with('category', $category);
//    }
//


    public function show(News $news, Category $category, $slug)
    {
        return view('news.category')->with('news', $news->getNewsByCategorySlug($slug))
            ->with('category', $category->getCategoryNameBySlug($slug));
    }

}
