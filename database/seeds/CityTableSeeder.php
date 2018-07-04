<?php

use Illuminate\Database\Seeder;
use App\models\City;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $City = City::truncate();
	    $City = City::create(['name_en' => 'City 1' , 'name_ar' => 'مدينة 1']);
	    $City = City::create(['name_en' => 'City 2' , 'name_ar' => 'مدينة 2']);
    }
}
