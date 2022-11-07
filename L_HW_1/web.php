<?php
//phpinfo();
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello/{name}', function ($name):string{
    return "Hello $name! ";
});

Route::get('/news', function (){
    $news=  file_get_contents('http://loripsum.net/api');
    return "Hello $news! ";
});


Route::get('/info', function (){
    $info =  'to our page';
    return "Welcome $info! ";
});


//
