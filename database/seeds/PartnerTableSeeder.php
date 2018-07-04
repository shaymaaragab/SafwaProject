<?php

use Illuminate\Database\Seeder;
use App\models\Partners;
class PartnerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $partners = partners::truncate();
    	$partners = Partners::create(['name_en' => 'partners 1',
    		'name_ar'=>'شريك 1',
    		'img'=>'/uploads/partner1.png'
    		]);

		$partners = Partners::create(['name_en' => 'partners 2',
		'name_ar'=>'شريك 2',
		'img'=>'/uploads/partner2.png'
		]);
    }
}
