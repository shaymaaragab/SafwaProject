<?php

use Illuminate\Database\Seeder;
use App\models\Product_category;

class Product_categoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $Product_category = Product_category::truncate();
    	$Product_category = Product_category::create(['name_en' => 'category 1',
            'name_ar'=>'فئه 1',
    		'img'=>'/uploads/partners1.png',
    		'parent_id'=>NULL
    		]);

    	$Product_category = Product_category::create(['name_en' => 'category 2',
    		'name_ar'=>'فئه 2',
            'img'=>'/uploads/partners2.png',
    		'parent_id'=>NULL
    		]);

    }
}
