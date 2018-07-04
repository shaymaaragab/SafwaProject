<?php

use Illuminate\Database\Seeder;
use App\models\Blog;

class BlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $Blog = Blog::truncate();
    	$Blog = Blog::create(['title_en' => 'title 1',
    		'title_ar'  =>'عنوان 1',
    		'content_en'=>'description Blog number 1 english',
    		'content_ar'=>'تفاصيل المصنع رقم 1 بالعربي',
    		'img'      =>'/uploads/manu1.png',
    		'user_id'   =>'1'
    		]);

    	$Blog = Blog::create(['title_en' => 'title 2',
    		'title_ar'  =>'عنوان 2',
    		'content_en'=>'description Blog number 1 english',
    		'content_ar'=>'تفاصيل المصنع رقم 2 بالعربي',
    		'img'      =>'/uploads/manu2.png',
    		'user_id'   =>'2'
    		]);
    }
}
