<?php

use Illuminate\Database\Seeder;
use App\models\Album;
class AlbumTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    // $Album = Album::truncate();
	$Album = Album::create(['name_en' => 'Album 1' , 'name_ar' => 'البوم 1']);
	$Album = Album::create(['name_en' => 'Album 2' , 'name_ar' => 'البوم 2']);
    }
}
