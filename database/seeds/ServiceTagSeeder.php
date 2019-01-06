<?php

use App\Servicetag;
use Illuminate\Database\Seeder;

class ServiceTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Servicetag::create([
            'name' => 'fashion',
            'description' => 'Any service can have this tag',
            'slug' => 'fashion',
            'approved' => 1
        ]);
        Servicetag::create([
            'name' => 'event',
            'description' => 'Any service can have this tag',
            'slug' => 'event',
            'approved' => 1
        ]);
    }
}
