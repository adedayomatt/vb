<?php

use App\ProductCategory;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       ProductCategory::create([
            'name' => 'uncategorized',
            'description' => 'Any product can belong to this category',
            'slug' => 'uncategorized',
            'approved' => 1
        ]);
    }
}
