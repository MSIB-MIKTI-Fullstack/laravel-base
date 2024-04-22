<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\ProductCategory;

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
        $name = fake()->text(255);
        $product_category = ProductCategory::inRandomOrder()->first();

        return [
            'name' => $name,
            'image' => fake()->imageUrl(640, 640),
            'description' => fake()->text(255),
            'price' => fake()->numberBetween(10000, 1000000), //1000 disini adalah harga minimum dan 10000 adalah harga maksimum
            'slug' => Str::slug($name),
            'product_category_id' => $product_category->id
            ];
    }
}
