<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminproducController;
use App\Http\Controllers\Admin\CheckoutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendController::class, 'index']);
Route::get('/home', [FrontendController::class, 'home'])->name('home');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('/shop', [FrontendController::class, 'shop'])->name('shop');
Route::get('/news', [FrontendController::class, 'news'])->name('news');
Route::get('/single_news', [FrontendController::class, 'single_news'])->name('single_news');
Route::get('/single_product', [FrontendController::class, 'single_product'])->name('single_product');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/cart', [AuthController::class, 'cart'])->name('cart');
    Route::get('/checkout', [AuthController::class, 'checkout'])->name('checkout');
});

Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {

    Route::get('/dashboard', [AdminController::class, 'index']);

    Route::resource('product', AdminproducController::class);
    Route::resource('checkout',CheckoutController::class);
});

require __DIR__ . '/auth.php';
