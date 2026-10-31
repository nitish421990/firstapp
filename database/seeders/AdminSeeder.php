<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admins')->insert([
            [
                'name' => 'Admin One',
                'email' => 'admin1@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Admin Two',
                'email' => 'admin2@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Super Admin',
                'email' => 'superadmin@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'System Admin',
                'email' => 'systemadmin@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Support Admin',
                'email' => 'support@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
