<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\HeroSection;
use App\Models\Service;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index() : View
    {
        $hero = HeroSection::first();
        $services = Service::all();
        return view('frontend.home.index', compact('hero', 'services'));     
    }
}
