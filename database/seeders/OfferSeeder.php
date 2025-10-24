<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Offer;
use App\Models\Category;

class OfferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get categories for offers
        $burgerCategory = Category::where('name', 'like', '%burger%')->first();
        $pizzaCategory = Category::where('name', 'like', '%pizza%')->first();
        $chickenCategory = Category::where('name', 'like', '%chicken%')->first();
        $seafoodCategory = Category::where('name', 'like', '%seafood%')->first();
        $hotdogCategory = Category::where('name', 'like', '%hotdog%')->first();

        // If categories don't exist, create them or use first available category
        $defaultCategory = Category::first();

        $offers = [
            [
                'name' => 'Burger Special',
                'description' => 'Amazing burger deals with premium ingredients',
                'offer_type' => 'hot',
                'discount_amount' => null,
                'food_name' => 'Premium Burger',
                'category_id' => $burgerCategory ? $burgerCategory->id : $defaultCategory->id,
                'tag_1' => 'Fresh',
                'tag_2' => 'Premium',
                'tag_3' => 'Delicious',
                'is_active' => true,
                'sort_order' => 1,
            ],
            [
                'name' => 'Pizza Discount',
                'description' => 'Get 10% off on all pizza orders',
                'offer_type' => 'discount',
                'discount_amount' => 10,
                'food_name' => 'Margherita Pizza',
                'category_id' => $pizzaCategory ? $pizzaCategory->id : $defaultCategory->id,
                'tag_1' => 'Cheesy',
                'tag_2' => 'Crispy',
                'tag_3' => 'Hot',
                'is_active' => true,
                'sort_order' => 2,
            ],
            [
                'name' => 'Hotdog Combo',
                'description' => 'Hot and fresh hotdog with special sauce',
                'offer_type' => 'hot',
                'discount_amount' => null,
                'food_name' => 'Classic Hotdog',
                'category_id' => $hotdogCategory ? $hotdogCategory->id : $defaultCategory->id,
                'tag_1' => 'Spicy',
                'tag_2' => 'Fresh',
                'tag_3' => 'Quick',
                'is_active' => true,
                'sort_order' => 3,
            ],
            [
                'name' => 'Chicken Special',
                'description' => '15% off on all chicken dishes',
                'offer_type' => 'discount',
                'discount_amount' => 15,
                'food_name' => 'Grilled Chicken',
                'category_id' => $chickenCategory ? $chickenCategory->id : $defaultCategory->id,
                'tag_1' => 'Grilled',
                'tag_2' => 'Healthy',
                'tag_3' => 'Tender',
                'is_active' => true,
                'sort_order' => 4,
            ],
            [
                'name' => 'Seafood Delight',
                'description' => 'Fresh seafood with amazing taste',
                'offer_type' => 'hot',
                'discount_amount' => null,
                'food_name' => 'Grilled Salmon',
                'category_id' => $seafoodCategory ? $seafoodCategory->id : $defaultCategory->id,
                'tag_1' => 'Fresh',
                'tag_2' => 'Ocean',
                'tag_3' => 'Premium',
                'is_active' => true,
                'sort_order' => 5,
            ],
        ];

        foreach ($offers as $offerData) {
            Offer::create($offerData);
        }
    }
}
