<?php

use App\ServiceCategory;
use Illuminate\Database\Seeder;

class ServiceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ServiceCategory::create([
            'name' => 'uncategorized',
            'description' => 'Any service can belong to this category',
            'slug' => 'uncategorized',
            'approved' => 1
        ]);
    }
}
