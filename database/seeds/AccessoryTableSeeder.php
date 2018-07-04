<?php

use Illuminate\Database\Seeder;
use App\models\Accessory;

class AccessoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $Accessory = Accessory::truncate();
    	$Accessory = Accessory::create(['name_en' => 'Accessory 1',
    		'name_ar'=>'مستلزمات 1',
    		'img'=>'/uploads/partner1.png',
    		'product_id' => '1'

    		]);

    	$Accessory = Accessory::create(['name_en' => 'Accessory 2',
    		'name_ar'=>'مستلزمات 2',
    		'img'=>'/uploads/partner2.png',
    		'product_id' => '2'

    		]);

    }
}
