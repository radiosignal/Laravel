<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = [
           [

                'title'=>'sport',
                'slug'=> 'sport'
            ],
            [

                'title'=>'policy',
                'slug'=> 'policy'
            ],
            [

                'title'=>'health',
                'slug'=> 'health'
            ]

        ];
       // DB::table('categories')->insert($category);
        Category::query()->insert($category);
    }
}
