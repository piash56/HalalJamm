<?php

namespace App\Http\Controllers\FrontendController;

use App\Http\Controllers\Controller;
use App\Models\Menu;
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
        return view('frontend.homes.indexOne', compact('bodyClass', 'popularMenus'));
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
