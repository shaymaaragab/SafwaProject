<?php

use Illuminate\Database\Seeder;
use App\models\Entity;

class EntityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   
    public function run()
    {
        // $Entity = Entity::truncate();
    	$Entity = Entity::create(['name' => 'Auto Clinic']);
        $Entity = Entity::create(['name' => 'Health Care']);
    	$Entity = Entity::create(['name' => 'Mobility']);
    }
}