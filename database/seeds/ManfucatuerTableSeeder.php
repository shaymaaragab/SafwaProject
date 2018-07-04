<?php
use App\models\Manufacturer;
use Illuminate\Database\Seeder;

class ManfucatuerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $manufacturer = manufacturer::truncate();
    	$manufacturer = Manufacturer::create(['name_en' => 'manufacturer 1',
    		'name_ar'=>'مصنع 1',
    		'img'=>'/uploads/manu1.png',
    		'content_en'=>'description manufacturer number 1 english',
    		'content_ar'=>'تفاصيل المصنع رقم 1 بالعربي'
    		]);

    	$manufacturer = Manufacturer::create(['name_en' => 'manufacturer 2',
    		'name_ar'=>'مصنع 2',
    		'img'=>'/uploads/manu2.png',
    		'content_en'=>'description manufacturer number 2 english',
    		'content_ar'=>'تفاصيل المصنع رقم 2 بالعربي'
    		]);


    }
}
