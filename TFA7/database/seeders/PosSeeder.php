<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PosSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('customers')->insert([
            [
                'full_name' => 'Juan Dela Cruz',
                'email' => 'juan@gmail.com',
                'phone' => '09171234567',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'full_name' => 'Maria Santos',
                'email' => 'maria@gmail.com',
                'phone' => '09181234567',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        DB::table('users')->insert([
            [
                'username' => 'admin',
                'full_name' => 'Administrator',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'john',
                'full_name' => 'John Smith',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}