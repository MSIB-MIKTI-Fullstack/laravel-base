<?php

namespace Database\Seeders;

// use App\Models\ProductCategory;

use App\Models\ProductCategory;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        $categories = [
            [
                'name' => 'Fashion',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Phone',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Smartwatch',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Laptops',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Jewelry',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Kitchen pro.',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Home decor',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Shoes',
                'created_at' => $now,
                'updated_at' => $now
            ],
        ];

        ProductCategory::insert($categories);
    }
}
