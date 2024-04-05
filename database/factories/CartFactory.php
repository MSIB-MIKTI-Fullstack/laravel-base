<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cart>
 */
class CartFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_id' => Product::factory(), //Product::factory() adalah fungsi yang digunakan untuk mengisi data ke database
            'user_id' => User::factory() //factory disini adalah fungsi yang digunakan untuk mengisi data ke database
        ];
    }
}

