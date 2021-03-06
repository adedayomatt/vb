<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       User::create([
            'firstname' => 'User',
            'lastname' => 'Dummy',
            'username' => 'userdummy',
            'email' => 'userdummy@example.com',
            'password' => Hash::make('user'),
            'email_verified_at' => now()

        ]);
    }
}
