<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use PhpParser\Lexer\TokenEmulator\ReadonlyTokenEmulator;
use App\Models\News;

class AdminIndexController extends Controller
{


    //action to download image

    public function  test1(){

        return response()->download('f250gto.jpg');



    }



    //action to download news
    public function  test2(News $news){

        return response()->json($news->getNews())
            ->header('Content-Disposition', 'attachment; filename="news.txt"')
            ->setEncodingOptions(JSON_UNESCAPED_UNICODE| JSON_PRETTY_PRINT);
    }





}




