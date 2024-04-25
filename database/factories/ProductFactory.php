<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\ProductCategories;
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
        $name = fake()->text(25);
        $product_category = ProductCategory::inOrderRandom()->first();

        return [
            'name' => $name,
            'description' => fake()->text(255),
            'image' => fake()->imageUrl(640, 640),
            'price' => fake()->numberBetween(10000, 100000),
            'slug' => Str::slug($name),
            'product_category_id' => $product_category->id
        ];
    }
}
