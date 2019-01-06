<?php

use App\Producttag;
use Illuminate\Database\Seeder;

class ProductTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Producttag::create([
            'name' => 'men',
            'description' => 'Any product can have this tag',
            'slug' => 'men',
            'approved' => 1
        ]);
        Producttag::create([
            'name' => 'women',
            'description' => 'Any product can have this tag',
            'slug' => 'women',
            'approved' => 1
        ]);
    }
}
