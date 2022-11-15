<?php

namespace App\Models;


class Category
{

    private  $categories = [
     1=> [
          'id'=> 1,
          'title'=>'sport',
          'slug'=> 'sport'
      ],
       2=> [
            'id'=> 2,
            'title'=>'policy',
            'slug'=> 'policy'
        ],
       3=> [
            'id'=> 3,
            'title'=>'health',
            'slug'=> 'health'
        ]

    ];

    public function getCategories(): array
    {
        return $this->categories ;
    }


    public function getCategoryById($id): ?array{

        if(array_key_exists($id, $this->getCategories())){
            return $this->categories[$id];
        }else
        return null;
    }


    public function getCategoryIdBySlug($slug)
    {
        $id = null;
        foreach ($this->getCategories() as $category) {
            if($category['slug'] == $slug){
                $id = $category['id'];
                break;
            }
        }
        return $id;
    }


    public function getCategoryNameBySlug($slug)
    {
        $id = $this->getCategoryIdBySlug($slug);
        $category = $this->getCategoryById($id);
        if($category !=[])

            return $category['title'];

        else return null;
    }


//    public static function getCategories(): array{
//
//        return static::$category;
//
//    }

//    public static function getCategory($category_id): ?array{
//
//        foreach (static::getCategories() as $category){
//
//            if ($category['id'] == $category_id){
//                return $category;
//            }
//
//        }
//
//        return null;
//    }


}
