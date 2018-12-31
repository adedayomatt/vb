<?php

use App\Vendor;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class VendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vendor::create([
            'firstname' => 'Vendor',
            'lastname' => 'Dummy',
            'username' => 'vendordummy',
            'email' => 'vendordummy@example.com',
            'password' => Hash::make('vendor'),
        ]);
    }
}
