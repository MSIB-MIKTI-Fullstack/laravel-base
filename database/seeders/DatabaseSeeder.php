<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        $this->call([
            ProductCategorySeeder::class,
            ProductSeeder::class,
            CartSeeder::class
        ]);

        \App\Models\User::create([
            'name' => 'Yoga Meleniawan Pamungkas',
            'email' => 'yogameleniawan@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('qwerty123'), // password
            'two_factor_secret' => null,
            'two_factor_recovery_codes' => null,
            'remember_token' => Str::random(10),
            'profile_photo_path' => null,
            'role' => 'user',
            'current_team_id' => null,
        ]);

        \App\Models\User::create([
            'name' => 'Administrator',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('qwerty123'), // password
            'two_factor_secret' => null,
            'two_factor_recovery_codes' => null,
            'remember_token' => Str::random(10),
            'profile_photo_path' => null,
            'role' => 'admin',
            'current_team_id' => null,
        ]);
    }
}
