<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'firstname' => 'John Doe',
            'surname' => 'John Doe',
            'email' => 'john.doe@gmail.com',
            'password' => Hash::make('Password123!'),
            'role' => 1,
            'status' => 1
        ]);

        User::create([
            'firstname' => 'Jane',
            'surname' => 'Smith',
            'email' => 'jane.smith@gmail.com',
            'password' => Hash::make('Password321!'),
            'role' => 1,
            'status' => 1
        ]);

        User::create([
            'firstname' => 'Admin',
            'surname' => 'Admin',
            'email' => 'admin.smith@gmail.com',
            'password' => Hash::make('Password1!'),
            'role' => 2,
            'status' => 1
        ]);
    }
}
