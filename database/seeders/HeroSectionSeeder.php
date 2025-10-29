<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\HeroSection;

class HeroSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HeroSection::create([
            'small_text' => 'Halal Jamm:',
            'primary_text' => 'Bold Flavors of New York',
            'secondary_text' => 'Fresh halal street food crafted with passion. Every bite tells a story of authentic New York cuisine.',
            'button_text' => 'View All Menu',
            'button_url' => 'https://halal-jamm-queens.cloveronline.com/menu/all',
            'price_text' => 'ONLY NOW',
            'price' => 7.00,
            'is_active' => true
        ]);
    }
}
