<?php

namespace App\Http\Controllers\FrontendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function about()
    {
        $bodyClass = 'page-wrapper';
        return view('frontend.pages.about', compact('bodyClass'));
    }

    public function allMenus()
    {
        $bodyClass = 'page-wrapper';
        return view('frontend.pages.allMenus', compact('bodyClass'));
    }

    public function cart()
    {
        $bodyClass = 'page-wrapper';
        return view('frontend.pages.cart', compact('bodyClass'));
    }

    public function checkout()
    {
        $bodyClass = 'page-wrapper';
        return view('frontend.pages.checkout', compact('bodyClass'));
    }

    public function chef()
    {
        $bodyClass = 'page-wrapper';
        return view('frontend.pages.chef', compact('bodyClass'));
    }

    public function chefDetails()
    {
        $bodyClass = 'page-wrapper';
        return view('frontend.pages.chefDetails', compact('bodyClass'));
    }

    public function contact()
    {
        $bodyClass = 'page-wrapper';
        return view('frontend.pages.contact', compact('bodyClass'));
    }

    public function faqs()
    {
        $bodyClass = 'page-wrapper';
        return view('frontend.pages.faqs', compact('bodyClass'));
    }

    public function gallery()
    {
        $bodyClass = 'page-wrapper';
        return view('frontend.pages.gallery', compact('bodyClass'));
    }

    public function history()
    {
        $bodyClass = 'page-wrapper';
        return view('frontend.pages.history', compact('bodyClass'));
    }

    // Menu Details
    public function menuBurger()
    {
        $bodyClass = 'page-wrapper';
        return view('frontend.pages.menuBurger', compact('bodyClass'));
    }

    public function menuChicken()
    {
        $bodyClass = 'page-wrapper';
        return view('frontend.pages.menuChicken', compact('bodyClass'));
    }

    public function menuGrill()
    {
        $bodyClass = 'page-wrapper';
        return view('frontend.pages.menuGrill', compact('bodyClass'));
    }

    public function menuPizza()
    {
        $bodyClass = 'page-wrapper';
        return view('frontend.pages.menuPizza', compact('bodyClass'));
    }

    public function menuRestaurant()
    {
        $bodyClass = 'page-wrapper';
        return view('frontend.pages.menuRestaurant', compact('bodyClass'));
    }

    public function menuSea()
    {
        $bodyClass = 'page-wrapper';
        return view('frontend.pages.menuSea', compact('bodyClass'));
    }

    public function productDetails()
    {
        $bodyClass = 'page-wrapper';
        return view('frontend.pages.productDetails', compact('bodyClass'));
    }


    public function shop()
    {
        $bodyClass = 'page-wrapper';
        return view('frontend.pages.shop', compact('bodyClass'));
    }


    // Blog
    public function blog()
    {
        $bodyClass = 'page-wrapper';
        return view('frontend.pages.blog', compact('bodyClass'));
    }

    public function blogDetails()
    {
        $bodyClass = 'page-wrapper';
        return view('frontend.pages.blogDetails', compact('bodyClass'));
    }
}
