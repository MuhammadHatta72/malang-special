<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User
        User::create([
            'name' => 'Super Admin',
            'username' => 'superadmin',
            'email' => 'superadmin@gmail.com',
            'gender' => 'laki-laki',
            'address' => 'Tuban',
            'phone' => '085706000000',
            'role' => '1',
            'image' => 'not_found',
            'password' => bcrypt('12345'),
        ]);

        User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'gender' => 'laki-laki',
            'address' => 'Tuban',
            'phone' => '085706000000',
            'role' => '2',
            'image' => 'not_found',
            'password' => bcrypt('12345'),
        ]);

        User::create([
            'name' => 'User',
            'username' => 'user',
            'email' => 'user@gmail.com',
            'gender' => 'laki-laki',
            'address' => 'Tuban',
            'phone' => '085706000000',
            'role' => '3',
            'image' => 'not_found',
            'password' => bcrypt('12345'),
        ]);
    }
}
