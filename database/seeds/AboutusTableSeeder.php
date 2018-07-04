<?php

use Illuminate\Database\Seeder;
use App\models\Aboutus;

class AboutusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $Aboutus = Aboutus::truncate();
    	$Aboutus = Aboutus::create(['title_en' => 'title 1',
    		'title_ar'=>'عنوان 1',
    		'content_en'=>'content 1',
    		'content_ar'=>'محتوي 1',
    		'entity_id'=>'1'
    		]);
        
    	$Aboutus = Aboutus::create(['title_en' => 'title 2',
    		'title_ar'=>'عنوان 2',
    		'content_en'=>'content 2',
    		'content_ar'=>'محتوي 2',
    		'entity_id'=>'2'
    		]);

        $Aboutus = Aboutus::create(['title_en' => 'title 3',
            'title_ar'=>'عنوان 3',
            'content_en'=>'content 3',
            'content_ar'=>'محتوي 3',
            'entity_id'=>'3'
            ]);
    }
}
