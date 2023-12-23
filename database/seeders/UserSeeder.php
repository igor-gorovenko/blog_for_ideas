<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->truncate();

        User::create([
            'name' => 'Test User',
            'email' => 'user@example.com',
            'password' => 'test1234',
            'role' => 'user',
            'slug' => 'test-user',
        ]);

        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => 'test1234',
            'role' => 'admin',
            'slug' => 'admin-user',
        ]);
    }
}
