<?php

namespace App\Http\Controllers\News;
use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Categories;
use function view;

class NewsController extends Controller
{
    public function index(){
        return view('news.index');
    }

    public function briefNews(){
        $news = News::getNews();

        return view('news.briefNews')->with('news',$news);

    }

    public function detailNews($id){
        $news = News::getNewsId($id);


        return view('news.detailNews')->with('news',$news);

    }
    public function categoryNews($category_id){
        $news = News::getNewsCategoryId($category_id);


        return view('news.categoryNews')->with('news',$news);

    }
    public function addNews(){



        return view('news.addNews');

    }



}

