<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Burgers',
                'description' => 'Delicious and juicy burgers made with premium ingredients',
                'status' => 'active',
                'sort_order' => 1,
            ],
            [
                'name' => 'Pizza',
                'description' => 'Authentic Italian-style pizzas with fresh toppings',
                'status' => 'active',
                'sort_order' => 2,
            ],
            [
                'name' => 'Salads',
                'description' => 'Fresh and healthy salads with seasonal ingredients',
                'status' => 'active',
                'sort_order' => 3,
            ],
            [
                'name' => 'Pasta',
                'description' => 'Creamy and flavorful pasta dishes',
                'status' => 'active',
                'sort_order' => 4,
            ],
            [
                'name' => 'Seafood',
                'description' => 'Fresh seafood dishes from the ocean',
                'status' => 'active',
                'sort_order' => 5,
            ],
            [
                'name' => 'Beverages',
                'description' => 'Refreshing drinks and beverages',
                'status' => 'active',
                'sort_order' => 6,
            ],
            [
                'name' => 'Desserts',
                'description' => 'Sweet treats and delicious desserts',
                'status' => 'active',
                'sort_order' => 7,
            ],
            [
                'name' => 'Appetizers',
                'description' => 'Light bites and starters to begin your meal',
                'status' => 'active',
                'sort_order' => 8,
            ],
        ];

        foreach ($categories as $categoryData) {
            Category::create($categoryData);
        }
    }
}
