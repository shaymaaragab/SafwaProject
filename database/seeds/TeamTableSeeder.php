<?php

use Illuminate\Database\Seeder;
use App\models\Team;

class TeamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $Team = Team::truncate();
    	$Team = Team::create(['name_en' => 'name 1',
    		'name_ar'=>'اسم 1',
    		'email'=>'Alsafwa@alsafwa.com',
    		'entity_id' => '1'
    		]);

    	$Team = Team::create(['name_en' => 'name 2',
    		'name_ar'=>'اسم 2',
    		'email'=>'Alsafwa2@alsafwa2.com',
    		'entity_id' => '2'
    		]);
    }
}
