<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;
use App\Models\RegistrationEntry; // Import your model here if you have one

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Optionally you can call other seeders here
        $this->call(DatabaseSeeder::class);

        // Or manually add data using Faker if you want
        $faker = Faker::create();

        // Insert 2000 fake records into registration_entries table directly
        for ($i = 0; $i < 2000; $i++) {
            DB::table('registration_entries')->insert([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'email' => $faker->unique()->safeEmail,
                'contact_number' => $faker->phoneNumber,
                'designation' => $faker->randomElement(['LCE', 'VIP', 'VVIP', 'Secretariat', 'Exhibitor', 'Development Partner', 'Crew']),
                'lgu' => $faker->city,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
