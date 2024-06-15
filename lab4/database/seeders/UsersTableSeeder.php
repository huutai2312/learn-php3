<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Create an admin user
        User::create([
            'username' => 'admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('admin_password'), // You can use Hash::make('admin_password') if you're not using Laravel 7 or earlier
            'role' => 'admin',
        ]);

        // Create some sample customer users
        User::factory()->count(10)->create();
    }
}