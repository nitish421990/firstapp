<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Nitish Kumar',
                'email' => 'nitish@example.com',
                'password' => Hash::make('password'),
                'status' => 1,
                'role' => 'admin',
            ],
            [
                'name' => 'Rahul Sharma',
                'email' => 'rahul@example.com',
                'password' => Hash::make('password'),
                'status' => 1,
                'role' => 'user',
            ],
            [
                'name' => 'Aman Verma',
                'email' => 'aman@example.com',
                'password' => Hash::make('password'),
                'status' => 0,
                'role' => 'user',
            ],
            [
                'name' => 'Priya Singh',
                'email' => 'priya@example.com',
                'password' => Hash::make('password'),
                'status' => 1,
                'role' => 'manager',
            ],
            [
                'name' => 'Rohit Gupta',
                'email' => 'rohit@example.com',
                'password' => Hash::make('password'),
                'status' => 0,
                'role' => 'user',
            ],
        ]);
    }
}
