<?php

use Illuminate\Database\Seeder;
use App\models\Job_category;

class Job_categoryTableSeeder extends Seeder
{
    
    public function run()
    {
			// $Job_category = Job_category::truncate();
			$Job_category = Job_category::create(['name_en' => 'Job_category 1' , 'name_ar' => 'فئه 1']);
			
			$Job_category = Job_category::create(['name_en' => 'Job_category 2' , 'name_ar' => 'فئه 2']);

    }
}
