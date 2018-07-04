<?php

use Illuminate\Database\Seeder;
use App\models\Slider;

class SliderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $Slider = Slider::truncate();
    	$Slider = Slider::create(['title_en' => 'title 1',
    		'title_ar'=>'عنوان 1',
    		'img'=>'/uploads/partner1.png',
    		'entity_id' => '1'
    		]);
        $Slider = Slider::create(['title_en' => 'title 1',
            'title_ar'=>'عنوان 1',
            'img'=>'/uploads/partner2.png',
            'entity_id' => '1'
            ]);

    	$Slider = Slider::create(['title_en' => 'title 2',
    		'title_ar'=>'عنوان 2',
    		'img'=>'/uploads/partner2.png',
    		'entity_id' => '2'
    		]);
        $Slider = Slider::create(['title_en' => 'title 2',
            'title_ar'=>'عنوان 2',
            'img'=>'/uploads/partner1.png',
            'entity_id' => '2'
            ]);

        $Slider = Slider::create(['title_en' => 'title 2',
            'title_ar'=>'عنوان 2',
            'img'=>'/uploads/partner2.png',
            'entity_id' => '3'
            ]);
        $Slider = Slider::create(['title_en' => 'title 2',
            'title_ar'=>'عنوان 2',
            'img'=>'/uploads/partner1.png',
            'entity_id' => '3'
            ]);

    }
}
