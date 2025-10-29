<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\OfferSection;

class OfferSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        OfferSection::create([
            'primary_text' => 'Special deal offer every weekend',
            'secondary_text' => 'grilled chicken shawarma',
            'secondary_price' => 8.25,
            'small_text' => 'Restaurant, where culinary excellence meets warm hospitality in every dish we serve nestled in the heart of city',
            'button_text' => 'order now',
            'button_url' => 'https://halal-jamm-queens.cloveronline.com/menu/all',
            'offer_price_text' => 'only',
            'offer_price' => 8.25,
            'is_active' => true
        ]);
    }
}