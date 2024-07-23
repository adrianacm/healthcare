<?php

namespace Database\Seeders;

use App\Models\Patient;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Optional: Get the currently authenticated user if you need to assign patients to a specific user
        $userId = Auth::id(); // If you want to set created_by as the currently logged-in user

        // Create sample patients
        foreach (range(1, 10) as $index) {
            Patient::create([
                'user_id' => 1,
                'firstname' => $faker->firstName,
                'lastname' => $faker->lastName,
                'email' => $faker->unique()->safeEmail,
                'phone' => $faker->phoneNumber,
                'nhs_number' => $faker->unique()->bothify('##########'),
                'street' => $faker->streetAddress,
                'city' => $faker->city,
                'postcode' => $faker->postcode,
                'dob' => $faker->date($format = 'Y-m-d', $max = '2000-01-01'), // Date of Birth
                'gender' => $faker->randomElement(['Male', 'Female']),
                'status' => $faker->randomElement([1, 2]), // Example statuses
            ]);
        }
    }
}
