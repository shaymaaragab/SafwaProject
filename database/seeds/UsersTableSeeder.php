<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $user = User::truncate();
    	$user = User::create(['name' => 'Mohamed salah',
    		'mobile'=>'01097465056',
    		'email'=>'m.alsayed.salah@gmail.com',
    		'password'=> bcrypt("123456"),
    		'img'=>'/uploads/user1.png',
    		'job'=>'admin'
    		]);

    	$user = User::create(['name' => 'Nahas',
    		'mobile'=>'01286890685',
    		'email'=>'nahas@gmail.com',
    		'password'=> bcrypt("123456"),
    		'img'=>'/uploads/user2.png',
    		'job'=>'admin'
    		]);

    }
}
