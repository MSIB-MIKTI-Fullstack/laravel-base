<?php

namespace Database\Seeders;

<<<<<<< HEAD
use App\Models\Cart;
=======
>>>>>>> origin/rafa
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
<<<<<<< HEAD
        Cart::factory(10)->create();
=======
        \App\Models\Cart::factory(5)->create();
        
>>>>>>> origin/rafa
    }
}
