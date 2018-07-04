<?php

use Illuminate\Database\Seeder;
use App\models\Applicant;

class ApplicantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                
        // $Applicant = Applicant::truncate();
    	$Applicant = Applicant::create(['name' => 'Applicant 1',
    		'email'=>'Applicant1@Applicant.com',
    		'phone'=>'0123456789',
    		'img'   =>'/uploads/cv1',
    		'job_id'=>'1'

    		]);

    	$Applicant = Applicant::create(['name' => 'Applicant 2',
    		'email'=>'Applicant2@Applicant.com',
    		'phone'=>'0123456789',
    		'img'   =>'/uploads/cv2',
    		'job_id'=>'2'
    		]);

    }
}
