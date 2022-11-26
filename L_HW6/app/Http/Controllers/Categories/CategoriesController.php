<?php

namespace App\Http\Controllers\Categories;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ValidatedInput;
use Ramsey\Uuid\Exception\TimeSourceException;
use function view;

class CategoriesController extends Controller
{
    public function index()
    {
        return view('categories.index');
    }

    public function categories()
    {

      $categories = Category::query()->get();


        return view('news.categories')->with('categories', $categories);

    }



//class Category extends Model
//{
//    use HasFactory;
//    protected $fillable = ['title','slug'];
//
//    public function news()
//    {
//        return $this->hasMany(News::class, 'category_id')->get();
//
//    }
//}


    public function show($slug)
    {
        $category = Category::query()->where('slug', $slug)->first();

        $news = News::query()->where('category_id', $category->id)->get();
//        $news = News::query()->where('category_id', $category->news());



        return view('news.category')
        ->with('news', $news)
            ->with('category', $category->title);
    }

}
