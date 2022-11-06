<?php
namespace App\Models;



class News{

    private static $news = [
        [
            'id' => 1,
            'title' => 'Sport News 1',
            'text' => 'We have ve got a news 1 and it is very well ',
            'category_id'=>1
        ],
        [
            'id' => 2,
            'title' => 'Policy News 2',
            'text' => 'Here we have got second bad  news ',
            'category_id'=>2
        ],
        [
            'id' => 3,
            'title' => 'Health News 3',
            'text' => 'Here is other  news from Neutral to good ',
            'category_id'=>3
        ],[
            'id' => 4,
            'title' => 'Sport News 4',
            'text' => 'We have ve got a news 2 and it is very well ',
            'category_id'=>1
        ],
        [
            'id' => 5,
            'title' => 'Policy News 5',
            'text' => 'Here we have got the bad  news ',
            'category_id'=>2
        ],
        [
            'id' => 6,
            'title' => 'Health News 6',
            'text' => 'Here is other  news Neutral ',
            'category_id'=>3
        ],
        [
            'id' => 7,
            'title' => 'Sport News 7',
            'text' => 'We have ve got a news 3 and it is very well ',
            'category_id'=>1
        ],
        [
            'id' => 8,
            'title' => 'Policy News 8',
            'text' => 'Here we have got third bad  news ',
            'category_id'=>2
        ],
        [
            'id' => 9,
            'title' => 'Health News 9',
            'text' => 'Here is other  news from neutral to bad ',
            'category_id'=>3
        ]
    ];

    public static function getNews(): array{

        return static::$news;
    }


    public static function getNewsCategoryId($category_id)
    {

        return ( $news = static::getNews())?  array_filter($news, function ($value) use ($category_id) {
            return ($value["category_id"] == $category_id);
        }): null;

    }

    public static function getNewsId($id): ?array{

        foreach (static::getNews() as $news){

            if ($news['id'] == $id){
                return $news;
            }

        }

        return [];
    }




}
