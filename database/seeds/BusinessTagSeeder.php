<?php

use App\Businesstag;
use Illuminate\Database\Seeder;

class BusinessTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Businesstag::create([
            'name' => 'sale',
            'description' => 'Any business can have this tag',
            'slug' => 'sale',
            'approved' => 1
        ]);
        Businesstag::create([
            'name' => 'service',
            'description' => 'Any business can have this tag',
            'slug' => 'service',
            'approved' => 1
        ]);

    }
}
