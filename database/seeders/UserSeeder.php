<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::firstOrCreate([
            'email' => 'admin@example.com',
            'name' => 'Admin',
            'password' => bcrypt('123456'),
        ]);
    
        // Assign role
        $user->assignRole('Super Admin');
    }
}
