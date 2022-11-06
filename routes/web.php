<?php
//phpinfo();
use App\Http\Controllers\Admin\IndexController as AdminIndexController;
use App\Http\Controllers\Categories\CategoriesController as CategoriesIndexController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\News\NewsController as NewsIndexController;
use App\Http\Controllers\Users\UsersController as UsersIndexController;
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

//Route::get('/', function (){
//    return view('welcome');
//});
//
//Route::get('/hello/{name}', function ($name):string{
//    return "Hello $name! ";
//});
//
//Route::get('/news', function (){
//    $news=  file_get_contents('http://loripsum.net/api');
//    return "Hello $news! ";
//});


Route::get('/info', function (){
    $info =  'to our page';
    return "Welcome $info! ";
});


//1 Cw Route Main page
Route::get('/', [HomeController::class, 'index'])->name("home");

 //Admin routes
Route::prefix('admin')->group(function (){
    Route::get('/', [AdminIndexController::class, 'index'])->name("admin.index");
// 3 CX Route
    Route::get('/test1', [AdminIndexController::class, 'test1'])->name("admin.test1");
// 4 CW Route
    Route::get('/test2', [AdminIndexController::class, 'test2'])->name("admin.test2");
});

//Admin routes
Route::prefix('users')->group(function (){
    Route::get('/', [UsersIndexController::class, 'index'])->name("users.index");
    Route::get('/auth', [UsersIndexController::class, 'auth'])->name("users.auth");

});


// News Routes
Route::get('/news', [NewsIndexController::class, 'index'])->name("news.index");
Route::get('/news/briefnews', [NewsIndexController::class, 'briefNews'])->name("news.briefNews");
Route::get('/news/detailNews/{id}', [NewsIndexController::class, 'detailNews'])->name("news.detailNews");
Route::get('/news/category/{category_id?}', [NewsIndexController::class, 'categoryNews'])->name("news.categoryNews");
Route::get('/news/category/{category_id?}/news/detailNews/{id}', [NewsIndexController::class, 'detailNews'])->name("news.categoryDetailNews");
Route::get('/news/addNews', [NewsIndexController::class, 'addNews'])->name("news.addNews");

//categories routes
Route::prefix('categories')->group(function () {
    Route::get('/categories', [CategoriesIndexController::class, 'index'])->name("categories.index");
    Route::get('/categories/categories', [CategoriesIndexController::class, 'categories'])->name("categories.categories");
});

//redirect
Route::redirect('/categories/categories/{category_id}','/news/category/{category_id}',301 )->name('news.redirectNews');
Route::redirect('/news/category/{category_id}','/news/category/{category_id}/news/detailNews/{id}',301 )->name('news.redirectDetailNews');
Route::fallback([HomeController::class, '_404']);


