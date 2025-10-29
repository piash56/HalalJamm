<?php

namespace App\Http\Controllers\FrontendController;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Offer;
use App\Models\HeroSection;
use App\Models\OfferSection;
use App\Models\Gallery;
use App\Models\Review;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * All HomePage Function Include
     * 
     */

    // Home One 
    public function indexOne()
    {
        $bodyClass = 'page-wrapper';
        $popularMenus = Menu::active()->popular()->orderBy('sort_order', 'asc')->orderBy('created_at', 'desc')->get();

        // Get active offers with their categories and menu counts
        $offers = Offer::active()
            ->with(['category' => function ($query) {
                $query->withCount('menus');
            }])
            ->ordered()
            ->take(5)
            ->get();

        // Get active hero section
        $heroSection = HeroSection::active()->first();

        // Get active offer section
        $offerSection = OfferSection::active()->first();

        // Get featured gallery images for slider
        $featuredGallery = Gallery::active()->featured()->ordered()->take(8)->get();

        // Get reviews for testimonials
        $reviews = Review::active()->ordered()->get();

        // Add image_url to each review for array compatibility
        $reviews = $reviews->map(function ($review) {
            $reviewArray = $review->toArray();
            $reviewArray['image_url'] = $review->image_url;
            return $reviewArray;
        });

        // Calculate overall rating and total reviews
        $overallRating = $reviews->avg('rating') ?? 0;
        $totalReviews = $reviews->count();

        // Create object similar to Google reviews structure for compatibility
        $googleReviews = (object) [
            'reviews' => $reviews,
            'overall_rating' => round($overallRating, 2),
            'total_reviews' => $totalReviews,
            'google_url' => '#', // You can set this to your Google Maps URL
        ];

        return view('frontend.homes.indexOne', compact('bodyClass', 'popularMenus', 'offers', 'heroSection', 'offerSection', 'featuredGallery', 'googleReviews'));
    }
    // Home Two 
    public function indexTwo()
    {
        $bodyClass = 'page-wrapper for-sidebar-menu';
        return view('frontend.homes.indexTwo', compact('bodyClass'));
    }
    // Home Three 
    public function indexThree()
    {
        $bodyClass = 'page-wrapper';
        return view('frontend.homes.indexThree', compact('bodyClass'));
    }


    // Home Four 
    public function indexFour()
    {
        $bodyClass = 'page-wrapper';
        return view('frontend.homes.indexFour', compact('bodyClass'));
    }


    // Home Five 
    public function indexFive()
    {
        $bodyClass = 'page-wrapper';
        return view('frontend.homes.indexFive', compact('bodyClass'));
    }

    // Home Six 
    public function indexSix()
    {
        $bodyClass = 'page-wrapper';
        return view('frontend.homes.indexSix', compact('bodyClass'));
    }
}
