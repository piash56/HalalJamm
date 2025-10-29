<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Gallery;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $galleryImages = [
            [
                'title' => 'Delicious Burger',
                'image' => 'burger.jpg',
                'description' => 'Fresh halal burger with premium ingredients',
                'is_featured' => true,
                'sort_order' => 1,
                'is_active' => true
            ],
            [
                'title' => 'Grilled Chicken Shawarma',
                'image' => 'shawarma.jpg',
                'description' => 'Authentic Middle Eastern shawarma',
                'is_featured' => true,
                'sort_order' => 2,
                'is_active' => true
            ],
            [
                'title' => 'Fresh Salad Bowl',
                'image' => 'salad.jpg',
                'description' => 'Healthy and nutritious salad',
                'is_featured' => true,
                'sort_order' => 3,
                'is_active' => true
            ],
            [
                'title' => 'Crispy French Fries',
                'image' => 'fries.jpg',
                'description' => 'Golden crispy french fries',
                'is_featured' => true,
                'sort_order' => 4,
                'is_active' => true
            ],
            [
                'title' => 'Chicken Platter',
                'image' => 'chicken.jpg',
                'description' => 'Complete chicken meal with sides',
                'is_featured' => true,
                'sort_order' => 5,
                'is_active' => true
            ],
            [
                'title' => 'Beef Gyro',
                'image' => 'gyro.jpg',
                'description' => 'Traditional beef gyro wrap',
                'is_featured' => true,
                'sort_order' => 6,
                'is_active' => true
            ],
            [
                'title' => 'Mixed Grill',
                'image' => 'grill.jpg',
                'description' => 'Assorted grilled meats and vegetables',
                'is_featured' => true,
                'sort_order' => 7,
                'is_active' => true
            ],
            [
                'title' => 'Halal Pizza',
                'image' => 'pizza.jpg',
                'description' => 'Fresh halal pizza with premium toppings',
                'is_featured' => true,
                'sort_order' => 8,
                'is_active' => true
            ]
        ];

        foreach ($galleryImages as $image) {
            Gallery::create($image);
        }
    }
}
