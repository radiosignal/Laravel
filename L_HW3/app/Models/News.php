<?php
namespace App\Models;
use App\Models\Category;


class News{
    private Category $categories;

    private  $news = [
     '1'=>  [
            'id' => 1,
            'title' => 'Sport News 1',
            'text' => 'We have  got a news 1 and it is very well ',
            'category_id'=>1,
         'isPrivate'=> false
        ],
     '2'=> [
            'id' => 2,
            'title' => 'Policy News 2',
            'text' => 'Here we have got second bad  news ',
            'category_id'=>2,
         'isPrivate'=> false
        ],
       '3'=> [
            'id' => 3,
            'title' => 'Health News 3',
            'text' => 'Here is other  news from Neutral to good ',
            'category_id'=>3,
           'isPrivate'=> true
        ],
        '4'=>[
            'id' => 4,
            'title' => 'Sport News 4',
            'text' => 'We have  got a news 4 and it is very well ',
            'category_id'=>1,
            'isPrivate'=> false
        ],
        '5'=>[
            'id' => 5,
            'title' => 'Policy News 5',
            'text' => 'Here we have got the bad  news ',
            'category_id'=>2,
            'isPrivate'=> false
        ],
       '6'=>[
            'id' => 6,
            'title' => 'Health News 6',
            'text' => 'Here is other  news Neutral ',
            'category_id'=>3,
           'isPrivate'=> true
        ],
        '7'=>[
            'id' => 7,
            'title' => 'Sport News 7',
            'text' => 'We have got a news 7 and it is very well ',
            'category_id'=>1,
            'isPrivate'=> false
        ],
        '8'=>[
            'id' => 8,
            'title' => 'Policy News 8',
            'text' => 'Here we have got third bad  news ',
            'category_id'=>2,
            'isPrivate'=> false
        ],
        '9'=>[
            'id' => 9,
            'title' => 'Health News 9',
            'text' => 'Here is other  news from neutral to bad ',
            'category_id'=>3,
            'isPrivate'=> true
        ]
    ];

    public function __construct(Category $categories)
    {
        $this->categories = $categories;

    }

    public function getNews(): array{

        return $this->news;
    }


//    public function getNewsCategoryId($category_id)
//    {
//
//        return ( $news = $this->getNews())?  array_filter($news, function ($value) use ($category_id) {
//            return ($value["category_id"] == $category_id);
//        }): null;
//
//    }

    public function getNewsId($id): ?array{

//        foreach ($this->getNews() as $news){
//
//            if ($news['id'] == $id){
//                return $news;
//            }
//
//        }
        if(array_key_exists($id, $this->getNews())){
            return $this->getNews()[$id];
        }

        return [];
    }


    public function getNewsByCategorySlug($slug)
    {

     $id = $this->categories->getCategoryIdBySlug($slug);
        $news =[];
        foreach ($this->getNews() as $item) {
            if ($item['category_id'] == $id) {
                $news[] = $item;;
            }
        }
        return $news;
    }



}
