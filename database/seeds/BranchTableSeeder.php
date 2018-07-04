<?php

use Illuminate\Database\Seeder;
use App\models\Branch;

class BranchTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $Branch = Branch::truncate();
    	$Branch = Branch::create(['name_en' => 'Branch 1',
    		'name_ar'  =>'فرع 1',
    		'address_en'=>'Address 1',
    		'address_ar'=>'عنوان 1',
    		'email'=>'email@email.com',
    		'phone1'      =>'012345',
    		'phone2'      =>'012345',
    		'phone3'      =>'012345',
    		'phone4'      =>'012345',
    		'map'      =>'<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13799.904197652519!2d31.326975424459054!3d30.15210075948996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458143b70a85863%3A0x600757752eef802c!2sAl+Marj%2C+Kafr+El-Shorafa%2C+Qesm+Al+Marg%2C+Cairo+Governorate!5e0!3m2!1sen!2seg!4v1503342319810" width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>',
    		'entity_id'   =>'1'
    		]);


    	$Branch = Branch::create(['name_en' => 'Branch 2',
    		'name_ar'  =>'فرع 2',
    		'address_en'=>'Address 2',
    		'address_ar'=>'عنوان 2',
    		'email'=>'email@email.com',
    		'phone1'      =>'012345',
    		'phone2'      =>'012345',
    		'phone3'      =>'012345',
    		'phone4'      =>'012345',
    		'map'      =>'<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13799.904197652519!2d31.326975424459054!3d30.15210075948996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458143b70a85863%3A0x600757752eef802c!2sAl+Marj%2C+Kafr+El-Shorafa%2C+Qesm+Al+Marg%2C+Cairo+Governorate!5e0!3m2!1sen!2seg!4v1503342319810" width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>',
    		'entity_id'   =>'1'
    		]);

        $Branch = Branch::create(['name_en' => 'Branch 2',
            'name_ar'  =>'فرع 2',
            'address_en'=>'Address 2',
            'address_ar'=>'عنوان 2',
            'email'=>'email@email.com',
            'phone1'      =>'012345',
            'phone2'      =>'012345',
            'phone3'      =>'012345',
            'phone4'      =>'012345',
            'map'      =>'<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13799.904197652519!2d31.326975424459054!3d30.15210075948996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458143b70a85863%3A0x600757752eef802c!2sAl+Marj%2C+Kafr+El-Shorafa%2C+Qesm+Al+Marg%2C+Cairo+Governorate!5e0!3m2!1sen!2seg!4v1503342319810" width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>',
            'entity_id'   =>'1'
            ]);

        $Branch = Branch::create(['name_en' => 'Branch 2',
            'name_ar'  =>'فرع 2',
            'address_en'=>'Address 2',
            'address_ar'=>'عنوان 2',
            'email'=>'email@email.com',
            'phone1'      =>'012345',
            'phone2'      =>'012345',
            'phone3'      =>'012345',
            'phone4'      =>'012345',
            'map'      =>'<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13799.904197652519!2d31.326975424459054!3d30.15210075948996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458143b70a85863%3A0x600757752eef802c!2sAl+Marj%2C+Kafr+El-Shorafa%2C+Qesm+Al+Marg%2C+Cairo+Governorate!5e0!3m2!1sen!2seg!4v1503342319810" width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>',
            'entity_id'   =>'1'
            ]);



    }
}
