<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
         $this->call(ManfucatuerTableSeeder::class);
         $this->call(PartnerTableSeeder::class);
         $this->call(EntityTableSeeder::class);
         $this->call(AboutusTableSeeder::class);
         $this->call(AlbumTableSeeder::class);
         $this->call(MediaTableSeeder::class);
         $this->call(SliderTableSeeder::class);
         $this->call(ContactTableSeeder::class);
         $this->call(TeamTableSeeder::class);
         $this->call(BlogTableSeeder::class);
         $this->call(Job_categoryTableSeeder::class);
         $this->call(JobTableSeeder::class);
         $this->call(ApplicantTableSeeder::class);
         $this->call(CurrencyTableSeeder::class);
         $this->call(Product_categoryTableSeeder::class);
         $this->call(ProductTableSeeder::class);
         $this->call(Product_imagesTableSeeder::class);
         $this->call(Product_documentTableSeeder::class);
         $this->call(AccessoryTableSeeder::class);
         $this->call(CityTableSeeder::class);
         $this->call(BranchTableSeeder::class);
         $this->call(Event_categoryTableSeeder::class);
         $this->call(serviceTableSeeder::class);
    }
}
