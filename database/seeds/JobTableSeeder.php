<?php

use Illuminate\Database\Seeder;
use App\models\Job;

class JobTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $Job = Job::truncate();
    	$Job = Job::create(['title_en' => 'title 1',
    		'title_ar'  =>'عنوان 1',
    		'content_en'=>'description Job number 1 english',
    		'content_ar'=>'تفاصيل المصنع رقم 1 بالعربي',
    		'jobcat_id' =>'1',
    		'entity_id' =>'1',
		    'flag'=>1,
		    'location'=>'location 1'
    		]);

    	$Job = Job::create(['title_en' => 'title 2',
    		'title_ar'  =>'عنوان 2',
    		'content_en'=>'description Job number 2 english',
    		'content_ar'=>'تفاصيل المصنع رقم 2 بالعربي',
    		'jobcat_id' =>'2',
    		'entity_id' =>'2',
            'flag'=>0,
            'location'=>'location 2'
    		]);
    }
}
