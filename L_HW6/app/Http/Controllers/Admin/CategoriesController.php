<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;
use function React\Promise\all;

class CategoriesController extends Controller

{
    public function index()
    {
        $category = Category::query()->get();

//dd( $category);
        return view('admin.categories.index')->with('categories', $category);
    }

    public function create(Request $request)
    {
//crud
        $category = new Category();
//dd( $category);
        if ($request->isMethod('post')) {



            // DB::table('news')->insert($data);

            $category->fill($request->all());
            $category->save();

            // $request->flash();
            return redirect()->route('admin.categories.create')->with('success', 'Категория успешно добавлена!');
        }



        return view('admin.categories.create', [
            'news' => News::all(),
            'categories' => $category


//            'categories' => Category::all()
        ]);
    }



    public function edit(Category $category) {



        return view('admin.categories.create', [

            'categories' => $category
        ]);
    }

    public function update(Request $request,Category $category) {

        $category->fill($request->all());
        $category->save();
        return redirect()->route('admin.categories.index')->with('success', 'Новость изменена успешно!');
    }

    public function destroy(Category $category) {
        $category->delete();
        return redirect()->route('admin.categories.index')->with('success', 'Новость удалена успешно!');
    }


}
