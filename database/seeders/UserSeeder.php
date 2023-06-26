<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'      => 'Admin',
            'email'     => 'admin@test',
            'password'  => bcrypt('Admin@123'),
            'email_verified_at' => now()
        ])->assignRole('admin');

        User::create([
            'name'      => 'User',
            'email'     => 'user@test',
            'password'  => bcrypt('User@123'),
            'email_verified_at' => now()
        ])->assignRole('user');
    }
}
