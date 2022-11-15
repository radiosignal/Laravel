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

    public function briefNews(News $news){

        return view('news.briefNews')->with('news',$news->getNews());

    }

    public function detailNews($id, News $news){

        return view('news.detailNews')->with('news',$news->getNewsId($id));

    }



//    public function categoryNews($category_id, News $news){
//
//        return view('news.categoryNews')->with('news',$news->getNewsCategoryId($category_id));
//
//    }
    public function addNews(){



        return view('news.addNews');

    }



}

