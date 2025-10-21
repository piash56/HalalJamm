<?php

namespace App\Http\Controllers\AdminController;

use Illuminate\Http\Request;

class RoutingController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.index');
    }

    /**
     * Display a view based on first route param
     *
     * @return \Illuminate\Http\Response
     */
    public function root(Request $request, $first)
    {
        return view('admin.' . $first);
    }

    /**
     * second level route
     */
    public function secondLevel(Request $request, $first, $second)
    {
        return view('admin.' . $first . '.' . $second);
    }

    public function thirdLevel(Request $request, $first, $second, $third)
    {
        return view('admin.' . $first . '.' . $second . '.' .  $third);
    }
}
