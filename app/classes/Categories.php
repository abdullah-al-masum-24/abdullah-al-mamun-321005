<?php

namespace App\classes;

class Categories
{
    public $categories = [];
    public function __construct() {
        $this->categories = [
            0 => [
                'id' =>1,
                'name' => 'Man Fashion',
                'image' => 'category1.jpg'
            ],
            1 => [
                'id' =>2,
                'name' => 'Woman Fashion',
                'image' => 'category2.jpg'
            ],
            2 => [
                'id' =>3,
                'name' => 'Kids Fashion',
                'image' => 'category3.jpg'
            ],
            3 => [
                'id' =>4,
                'name' => 'Electronics',
                'image' => 'category4.jpeg'
            ],
            4 => [
                'id' =>5,
                'name' => 'Wood Items',
                'image' => 'category5.jpg'
            ],
        ];
    }

    public function getCategories() {
        return $this->categories;
    }
}