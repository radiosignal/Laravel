<?php
//phpinfo();
use App\Http\Controllers\Admin\AdminIndexController as AdminIndexController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Categories\CategoriesController as CategoriesIndexController;
use App\Http\Controllers\HomeController as HomeIndexController;
use App\Http\Controllers\News\NewsController as NewsIndexController;
use App\Http\Controllers\Users\UsersController as UsersIndexController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\CategoriesController as AdminCategoriesController;

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


//Admin routes

Route::
prefix('admin')->
name('admin.')->
namespace('Admin')->
group(function (){
    Route::get('/', [AdminNewsController::class, 'index'])->name("index");

    //CRUD routes news
    Route::match(['get', 'post'], '/create', [AdminNewsController::class, 'create'])->name('create');
    Route::get( '/edit/{news}', [AdminNewsController::class, 'edit'])->name('edit');
    Route::post( '/update/{news}', [AdminNewsController::class, 'update'])->name('update');
    Route::delete( '/destroy/{news}', [AdminNewsController::class, 'destroy'])->name('destroy');

    //CRUD block categories
    Route::
    prefix('categories')->
    name('categories.')->
    namespace('categories')->
    group(function() {
        Route::get('/', [AdminCategoriesController::class, 'index'])->name("index");
        Route::match(['get', 'post'], '/create', [AdminCategoriesController::class, 'create'])->name('create');
        Route::get('/edit/{category}', [AdminCategoriesController::class, 'edit'])->name('edit');
        Route::post('/update/{category}', [ AdminCategoriesController::class, 'update'])->name('update');
        Route::get('/destroy/{category}', [AdminCategoriesController::class, 'destroy'])->name('destroy');
    });
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
Route::get('/detailNews/{news}', [NewsIndexController::class, 'detailNews'])->name("detailNews");
Route::name('category.')
    ->group(function(){
        Route::get('categories', [CategoriesIndexController::class, 'categories'])->name("categories");
        Route::get('category/{slug}/', [CategoriesIndexController::class, 'show'])->name("show");


    });
});



Auth::routes();

Route::get('/home', [HomeIndexController::class, 'index'])->name('home');


