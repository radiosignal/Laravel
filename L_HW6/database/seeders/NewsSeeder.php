<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use function PHPUnit\Framework\assertIsString;


class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {


        DB::table('news')->insert($this->getData());


    }
    private function getData()
    {
        $data = [];
        $faker = Faker\Factory::create('ru_RU');
        for($i=0; $i<25;$i++){
            $data[] = [
                'title'=>$faker->realText(rand(10,30)),
                'text' =>$faker->realText(rand(1000,3000)),
                'isPrivate'=>false,

//                'category_id'=>rand(1,3)
                ];
        }




        return $data;
    }



}
