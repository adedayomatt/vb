<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'uncategorized',
            'description' => 'Any business can belong to this category',
            'slug' => 'uncategorized',
            'approved' => 1
        ]);
    }
}
