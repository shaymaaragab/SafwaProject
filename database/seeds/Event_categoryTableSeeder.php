<?php

use Illuminate\Database\Seeder;
use App\models\Event_category;

class Event_categoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $Event_category = Event_category::truncate();
    	$Event_category = Event_category::create(['name_en' => 'Event_category 1',
    		'name_ar'=>'فئه 1'
       		]);

    	$Event_category = Event_category::create(['name_en' => 'Event_category 2',
    		'name_ar'=>'فئه 2'
       		]);
    }
}
