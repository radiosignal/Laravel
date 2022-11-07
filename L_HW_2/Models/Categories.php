<?php

namespace App\Models;



class Categories
{

    private static $category = [
      [
          'id'=> 1,
          'title'=>'sport',
          'category_id'=> 1,
      ],
        [
            'id'=> 2,
            'title'=>'policy',
            'category_id'=> 2
        ],
        [
            'id'=> 3,
            'title'=>'health',
            'category_id'=> 3

        ]

    ];
    public static function getCategories(): array{

        return static::$category;

    }

    public static function getCategory($category_id): ?array{

        foreach (static::getCategories() as $category){

            if ($category['id'] == $category_id){
                return $category;
            }

        }

        return null;
    }


}
