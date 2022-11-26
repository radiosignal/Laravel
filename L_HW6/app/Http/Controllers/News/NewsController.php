<?php

namespace App\Http\Controllers\News;
use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Categories;
use Illuminate\Support\Facades\DB;
use function view;

class NewsController extends Controller
{
    public function index(){
        return view('news.index');
    }






    public function briefNews(){

//        $news = DB::table('news')->get();
       // $news = News::all();
//        $news = News::query()->where('isPrivate', false)->get();
        $news =  News::query()->paginate(5);

        return view('news.briefNews')->with('news',$news);

    }

    public function detailNews(News $news){

//        $news = DB::table('news')->find($id);
//        $news = News::query()->find($id);



        return view('news.detailNews')->with('news',$news);

    }

    public function addNews(){



        return view('news.addNews');

    }



}

