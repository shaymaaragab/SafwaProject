<?php

use Illuminate\Database\Seeder;
use App\models\Product_document;

class Product_documentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $Product_document = Product_document::truncate();
    	$Product_document = Product_document::create(['name_en' => 'Product_document 1',
    		'name_ar'=>'فايل 1',
    		'product_id'=>'1',
    		'img'=>'/uploads/file1.png'
    		]);


    	$Product_document = Product_document::create(['name_en' => 'Product_document 2',
    		'name_ar'=>'فايل 2',
    		'product_id'=>'2',
    		'img'=>'/uploads/file2.png'
    		]);

    }
}
