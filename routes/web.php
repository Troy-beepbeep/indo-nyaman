<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\GalleryItemController;
use App\Http\Controllers\PricingPackageController;
use App\Http\Controllers\BookingController;
use App\Models\GalleryItem;
use App\Models\Testimonial;
use App\Models\PricingPackage;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

// Route dashboard yang sudah mengirim variabel statistik
Route::get('/dashboard', function () {
    $totalGaleri = GalleryItem::count();
    $totalTestimoni = Testimonial::count();
    $totalPaket = PricingPackage::count();

    return view('dashboard', compact('totalGaleri', 'totalTestimoni', 'totalPaket'));
})->middleware(['auth', 'verified'])->name('dashboard');

// Route submit booking dari Landing Page (Public)
Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/bookings', [BookingController::class, 'index'])->name('bookings.index');
    Route::patch('/bookings/{booking}/status', [BookingController::class, 'updateStatus'])->name('bookings.update-status');
    Route::delete('/bookings/{booking}', [BookingController::class, 'destroy'])->name('bookings.destroy');

    Route::resource('testimonials', TestimonialController::class)->except(['show']);
    Route::resource('gallery-items', GalleryItemController::class)->except(['show']);
    Route::resource('pricing-packages', PricingPackageController::class)->except(['show']);
});

require __DIR__.'/auth.php';