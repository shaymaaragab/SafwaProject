<?php

use Illuminate\Database\Seeder;
use App\models\Currency;

class CurrencyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		// $Currency = Currency::truncate();
		$Currency = Currency::create(['currency' => ' Dollar' ]);
		$Currency = Currency::create(['currency' => 'Pound' ]);
    }
}
