<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(VendorSeeder::class);
        $this->call(BusinessCategorySeeder::class);
        $this->call(BusinessTagSeeder::class);
        $this->call(ProductCategorySeeder::class);
        $this->call(ProductTagSeeder::class);
        $this->call(ServiceCategorySeeder::class);
        $this->call(ServiceTagSeeder::class);
    }
}
