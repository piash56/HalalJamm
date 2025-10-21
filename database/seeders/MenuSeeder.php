<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Menu;
use App\Models\Category;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Category::all();

        foreach ($categories as $category) {
            // Create 3-8 menu items for each category
            $menuCount = rand(3, 8);

            for ($i = 1; $i <= $menuCount; $i++) {
                Menu::create([
                    'category_id' => $category->id,
                    'name' => $category->name . ' Item ' . $i,
                    'slug' => \Str::slug($category->name . ' item ' . $i),
                    'description' => 'Delicious ' . $category->name . ' item ' . $i . ' with premium ingredients',
                    'price' => rand(500, 2500) / 100, // Random price between $5.00 and $25.00
                    'status' => 'active',
                    'sort_order' => $i,
                ]);
            }
        }
    }
}
