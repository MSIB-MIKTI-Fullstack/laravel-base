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
<<<<<<< HEAD
        \App\Models\User::factory(10)->create();

=======
        // \App\Models\User::factory(10)->create();
        

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

>>>>>>> origin/rafa
        $this->call([
            ProductCategorySeeder::class,
            ProductSeeder::class,
            CartSeeder::class
        ]);
<<<<<<< HEAD

        \App\Models\User::create([
            'name' => 'Naufal Hawari',
            'email' => 'hawari@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('qwerty123'), // password
            'two_factor_secret' => null,
            'two_factor_recovery_codes' => null,
            'remember_token' => Str::random(10),
            'profile_photo_path' => null,
            'current_team_id' => null,
        ]);
=======
>>>>>>> origin/rafa
    }
}
