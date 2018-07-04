<?php

use Illuminate\Database\Seeder;
use App\models\Product;

class ProductTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		// $Product = Product::truncate();
		$Product = Product::create( [
			'name_en'         => 'Product 1',
			'name_ar'         => 'منتج 1',
			'fullcontent_en'  => 'Product1 content',
			'fullcontent_ar'  => 'محتوي منتج 1',
			'shortcontent_en' => 'Product1 short content',
			'shortcontent_ar' => 'محتوي منتج 1',
			'video'           => '<iframe width="560" height="315" src="https://www.youtube.com/embed/UM7APDBvMSE?list=PLF8OvnCBlEY3hrUl_dpi0EdmF96CzH8CM" frameborder="0" allowfullscreen></iframe>',
			'manufacturer_id' => '1',
			'currency_id'     => '1',
			'img'             => '/uploads/partner1.png',
			'catproduct_id'   => '1',
			'model_en'        => 'model 1',
			'model_ar'        => 'موديل 1',
			'price'           => '150',
		] );

		$Product = Product::create( [
			'name_en'         => 'Product 2',
			'name_ar'         => 'منتج 2',
			'fullcontent_en'  => 'Product2 content',
			'fullcontent_ar'  => 'محتوي منتج 2',
			'shortcontent_en' => 'Product2 short content',
			'shortcontent_ar' => 'محتوي منتج 2',
			'video'           => '<iframe width="560" height="315" src="https://www.youtube.com/embed/UM7APDBvMSE?list=PLF8OvnCBlEY3hrUl_dpi0EdmF96CzH8CM" frameborder="0" allowfullscreen></iframe>',
			'manufacturer_id' => '2',
			'currency_id'     => '2',
			'img'             => '/uploads/partner1.png',
			'catproduct_id'   => '2',
			'model_en'        => 'model 2',
			'model_ar'        => 'موديل 2',
			'price'           => '260',
		] );

	}
}
