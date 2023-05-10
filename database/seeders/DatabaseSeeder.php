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

        User::create([
            'name' => 'Super Admin',
            'username' => 'superadmin',
            'email' => 'attah1335@gmail.com',
            'gender' => 'laki-laki',
            'address' => 'Tuban',
            'phone' => '085706000000',
            'role' => '1',
            'image' => 'not_found',
            'password' => bcrypt('12345'),
        ]);
    }
}
