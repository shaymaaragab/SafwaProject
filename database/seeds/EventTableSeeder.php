<?php

use Illuminate\Database\Seeder;
use App\models\Event;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $Event = Event::truncate();
    	$Event = Event::create(['title_en' => 'Event 1',
    		'title_ar'=>'الحدث 1',
    		'content_en'=>'Event content',
    		'content_ar'=>'محتوي حدث 1',
      		'img'=>'uploads/partner1.png',
    		'date'=>date('d-m-Y'),
    		'time'=>date('H:m:i'),
    		'location'=>'location 1',
    		'eventcate_id' => '1'
    		]);

    	$Event = Event::create(['title_en' => 'Event 2',
    		'title_ar'=>'الحدث 2',
    		'content_en'=>'Event content',
    		'content_ar'=>'محتوي حدث 1',
      		'img'=>'uploads/partner1.png',
    		'date'=>date('d-m-Y'),
    		'time'=>date('H:m:i'),
    		'location'=>'location 1',
    		'eventcate_id' => '1'
    		]);



    }
}
