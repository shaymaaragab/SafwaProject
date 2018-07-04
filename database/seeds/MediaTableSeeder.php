<?php

use Illuminate\Database\Seeder;
use App\models\Media;

class MediaTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		// $Media = Media::truncate();
		$Media = Media::create( [
			'title_en' => 'title 1',
			'title_ar' => 'عنوان 1',
			'flag'     => '1',
			'src'      => 'https://www.youtube.com/embed/17mShYqFfOs',
			'album_id' => '1'
		] );

		$Media = Media::create( [
			'title_en' => 'title 1',
			'title_ar' => 'عنوان 1',
			'flag'     => '1',
			'src'      => 'https://www.youtube.com/embed/17mShYqFfOs',
			'album_id' => '1'
		] );


		$Media = Media::create( [
			'title_en' => 'title 2',
			'title_ar' => 'عنوان 2',
			'flag'     => '1',
			'src'      => 'https://www.youtube.com/embed/UM7APDBvMSE?list=PLF8OvnCBlEY3hrUl_dpi0EdmF96CzH8CM',
			'album_id' => '2'
		] );

		$Media = Media::create( [
			'title_en' => 'title 2',
			'title_ar' => 'عنوان 2',
			'flag'     => '1',
			'src'      => 'https://www.youtube.com/embed/UM7APDBvMSE?list=PLF8OvnCBlEY3hrUl_dpi0EdmF96CzH8CM',
			'album_id' => '2'
		] );

		$Media = Media::create( [
			'title_en' => 'title 2',
			'title_ar' => 'عنوان 2',
			'flag'     => '0',
			'src'      => '/uploads/partner1.png',
			'album_id' => '2'
		] );

		$Media = Media::create( [
			'title_en' => 'title 2',
			'title_ar' => 'عنوان 2',
			'flag'     => '0',
			'src'      => '/uploads/partner1.png',
			'album_id' => '2'
		] );

		$Media = Media::create( [
			'title_en' => 'title 2',
			'title_ar' => 'عنوان 2',
			'flag'     => '0',
			'src'      => '/uploads/partner2.png',
			'album_id' => '1'
		] );
		$Media = Media::create( [
			'title_en' => 'title 2',
			'title_ar' => 'عنوان 2',
			'flag'     => '0',
			'src'      => '/uploads/partner2.png',
			'album_id' => '1'
		] );


	}
}
