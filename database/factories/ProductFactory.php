<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        'name'=fake()->text(255);
        return [
            'name' =>$name,
            'description'=> fake()->text(255),
            'image'=> fake()->imageUrl(640,640),
            'price'=> fake()->numberbetween(1000,10000),
            'slug'=> Str::slug($name)
        ];
    }
}
