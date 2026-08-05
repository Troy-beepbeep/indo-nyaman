<?php

namespace App\Http\Controllers;

use App\Models\GalleryItem;
use App\Models\PricingPackage;
use App\Models\Testimonial;

class HomeController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::where('is_active', true)->latest()->get();
        $galleryItems = GalleryItem::where('is_active', true)->latest()->get();
        $pricingPackages = PricingPackage::where('is_active', true)->orderBy('sort_order')->get();

        return view('home', compact('testimonials', 'galleryItems', 'pricingPackages'));
    }
}