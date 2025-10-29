<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Review;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reviews = [
            [
                'name' => 'Mofazzal Hosen',
                'feedback' => 'Delicious gyros with perfectly seasoned meat and fresh ingredients! Fast service, clean place, and great portions for the price. Definitely one of the best gyro spots around!',
                'rating' => 5,
                'review_date' => '2025-10-25',
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'name' => 'Zidan Ahmed',
                'feedback' => 'Very kind service. Food is great. The jerk chicken is juicy and moist. The prices are reasonable. Will be back!!',
                'rating' => 5,
                'review_date' => '2025-10-25',
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'name' => 'Irisha Chowdhury',
                'feedback' => 'It was great. Starting from as soon as we walked in this amazing lady greeted us and served us with the utmost respect and care. She made sure we had everything we needed, and that the food was good. The portions were generous and the flavors were authentic.',
                'rating' => 5,
                'review_date' => '2025-10-22',
                'sort_order' => 3,
                'is_active' => true,
            ],
            [
                'name' => 'Nesar Sahar',
                'feedback' => 'Amazing halal food! The quality is consistently excellent and the service is always friendly. Highly recommend this place!',
                'rating' => 5,
                'review_date' => '2025-10-21',
                'sort_order' => 4,
                'is_active' => true,
            ],
            [
                'name' => 'Mohammad Fahad',
                'feedback' => 'The food the service the prices absolutely phenomenal makes you feel comfortable and very family friendly',
                'rating' => 5,
                'review_date' => '2025-10-20',
                'sort_order' => 5,
                'is_active' => true,
            ],
            [
                'name' => 'Mashrafee Rahman',
                'feedback' => 'Fire food with even better service. GOAT Spot',
                'rating' => 5,
                'review_date' => '2025-10-13',
                'sort_order' => 6,
                'is_active' => true,
            ],
            [
                'name' => 'Babu Md',
                'feedback' => 'After a long time I ve got the taste of Turkish & Iranian food in Stockholm called " Kebad med rice ". It is very delicious more than the food i tasted at Stockhom in Sweden. Environment of the restaurant is clean and welcoming.',
                'rating' => 5,
                'review_date' => '2025-10-14',
                'sort_order' => 7,
                'is_active' => true,
            ],
            [
                'name' => 'Ahnaf Abid',
                'feedback' => 'When I first walked in and saw the menu my first thought was wow that\'s expensive, but once I actually got my food it made a lot more sense. The price is great for the portion sizes, and the food is absolutely delicious!',
                'rating' => 5,
                'review_date' => '2025-10-13',
                'sort_order' => 8,
                'is_active' => true,
            ],
            [
                'name' => 'Siam hazari',
                'feedback' => 'The food is absolutely delicious everything is packed with flavor, fresh, and perfectly cooked. You can really taste the quality in every bite. The vibes are amazing too chill, welcoming, and full of energy.',
                'rating' => 5,
                'review_date' => '2025-10-13',
                'sort_order' => 9,
                'is_active' => true,
            ],
            [
                'name' => 'Sarah Johnson',
                'feedback' => 'Best halal restaurant in the area! The lamb kebabs are outstanding and the portions are generous. The staff is knowledgeable about the menu and very accommodating.',
                'rating' => 5,
                'review_date' => '2025-10-10',
                'sort_order' => 10,
                'is_active' => true,
            ],
            [
                'name' => 'Ahmed Hassan',
                'feedback' => 'Outstanding halal cuisine! The beef kofta is perfectly seasoned and the rice is fluffy. The staff is friendly and the restaurant has a warm atmosphere.',
                'rating' => 5,
                'review_date' => '2025-10-08',
                'sort_order' => 11,
                'is_active' => true,
            ],
            [
                'name' => 'Maria Rodriguez',
                'feedback' => 'Great food and excellent service! The falafel is crispy and delicious. The restaurant has a nice atmosphere and the prices are reasonable.',
                'rating' => 4,
                'review_date' => '2025-10-05',
                'sort_order' => 12,
                'is_active' => true,
            ],
        ];

        foreach ($reviews as $review) {
            Review::create($review);
        }
    }
}
