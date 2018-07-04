<?php

use Illuminate\Database\Seeder;
use App\models\Product_images;

class Product_imagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $Product_images = Product_images::truncate();
    	$Product_images = Product_images::create([
    		'img'=>'/uploads/partner1.png',
            'product_id'=>'1'
    		]);

//        $Product_images = Product_images::truncate();
    	$Product_images = Product_images::create([
    		'img'=>'/uploads/partner2.png',
            'product_id'=>'2'

    		]);

    }
}
