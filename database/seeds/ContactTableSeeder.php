<?php

use Illuminate\Database\Seeder;
use App\models\Contact;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $Contact = Contact::truncate();
    	$Contact = Contact::create(['name_en' => 'name 1',
    		'name_ar'=>'الاسم 1',
    		'position_ar'=>'مكان 1',
    		'position_en'=>'position 1',
    		'phone'=>'01118763129',
    		'email'=>'safwa@safwa.com',
    		'img'  =>'/uploads/partner1.png',
    		'entity_id'=>'1'
    		]);

    	$Contact = Contact::create(['name_en' => 'name 2',
    		'name_ar'=>'الاسم 2',
    		'position_ar'=>'مكان 1',
    		'position_en'=>'position 2',
    		'phone'=>'01118763129',
    		'email'=>'safwa@safwa.com',
    		'img'  =>'/uploads/partner2.png',
    		'entity_id'=>'2'
    		]);


        $Contact = Contact::create(['name_en' => 'name 2',
            'name_ar'=>'الاسم 2',
            'position_ar'=>'مكان 1',
            'position_en'=>'position 2',
            'phone'=>'01118763129',
            'email'=>'safwa@safwa.com',
            'img'  =>'/uploads/partner2.png',
            'entity_id'=>'2'
            ]);

        
        $Contact = Contact::create(['name_en' => 'name 2',
            'name_ar'=>'الاسم 2',
            'position_ar'=>'مكان 1',
            'position_en'=>'position 2',
            'phone'=>'01118763129',
            'email'=>'safwa@safwa.com',
            'img'  =>'/uploads/partner2.png',
            'entity_id'=>'2'
            ]);
    }
}
