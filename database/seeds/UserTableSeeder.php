<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.bg',
            'userType' => 'admin',
            'password' => Hash::make('12345678'),
        ]);

        User::create([
            'name' => 'Test',
            'email' => 'test@abv.bg',
            'userType' => 'user',
            'password' => Hash::make('12345678'),
        ]);
    }
}
