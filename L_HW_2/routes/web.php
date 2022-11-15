<?php
//phpinfo();
use App\Http\Controllers\Admin\AdminIndexController as AdminIndexController;
use App\Http\Controllers\Categories\CategoriesController as CategoriesIndexController;
use App\Http\Controllers\HomeController as HomeIndexController;
use App\Http\Controllers\News\NewsController as NewsIndexController;
use App\Http\Controllers\Users\UsersController as UsersIndexController;
use Illuminate\Support\Facades\Route;

///*
//|--------------------------------------------------------------------------
//| Web Routes
//|--------------------------------------------------------------------------
//|
//| Here is where you can register web routes for your application. These
//| routes are loaded by the RouteServiceProvider within a group which
//| contains the "web" middleware group. Now create something great!
//|
//*/


//Route Main page
Route::get('/', [HomeIndexController::class, 'index'])->name("home");

//Route vue
//Route::get('/vue', [HomeIndexController::class, 'vue'])->name("vue");

//Admin routes

Route::
prefix('admin')->
name('admin.')->
namespace('Admin')->
group(function (){
    Route::get('/', [AdminIndexController::class, 'index'])->name("index");
    Route::get('/test1', [AdminIndexController::class, 'test1'])->name("test1");
    Route::get('/test2', [AdminIndexController::class, 'test2'])->name("test2");
});


//Users routes
Route::
prefix('users')->
name('users.')->
namespace('Users')->
group(function (){
    Route::get('/', [UsersIndexController::class, 'index'])->name("index");
    Route::get('/auth', [UsersIndexController::class, 'auth'])->name("auth");

});


// News Routes

Route::
prefix('news')->
name('news.')->
namespace('News')->
group(function(){
Route::get('/', [NewsIndexController::class, 'index'])->name("index");
Route::get('/briefnews', [NewsIndexController::class, 'briefNews'])->name("briefNews");
Route::get('/detailNews/{id}', [NewsIndexController::class, 'detailNews'])->name("detailNews");
Route::get('/addNews', [NewsIndexController::class, 'addNews'])->name("addNews");
Route::name('category.')
    ->group(function(){
        Route::get('categories', [CategoriesIndexController::class, 'categories'])->name("categories");
        Route::get('category/{slug}/', [CategoriesIndexController::class, 'show'])->name("show");


    });
});

//        Route::get('/{category_id?}/detailNews/{id}', [NewsIndexController::class, 'detailNews'])->name("news.categoryDetailNews");
//categories routes
//Route::prefix('categories')->group(function () {
//    Route::get('/categories', [CategoriesIndexController::class, 'index'])->name("categories.index");
//    Route::get('/categories/categories', [CategoriesIndexController::class, 'categories'])->name("categories.categories");
//});

//redirect
//Route::redirect('/categories/categories/{category_id}','/news/category/{category_id}',301 )->name('news.redirectNews');
//Route::redirect('/news/category/{category_id}','/news/category/{category_id}/news/detailNews/{id}',301 )->name('news.redirectDetailNews');
//Route::fallback([HomeController::class, '_404']);



Auth::routes();

Route::get('/home', [HomeIndexController::class, 'index'])->name('home');


