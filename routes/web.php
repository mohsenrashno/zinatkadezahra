<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
<<<<<<< HEAD
=======
use App\Http\Controllers\OrderController;
use App\Http\Controllers\DashboardController;
>>>>>>> detached-head
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\order;
use App\Models\Product;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [DashboardController::class, 'role'])->name('dashboard');

Route::get('/dashboard_admin', [DashboardController::class, 'admin'])->middleware(['auth', 'verified'])->name('admin');
Route::get('/dashboard_tailor', [DashboardController::class, 'tailor'])->middleware(['auth', 'verified'])->name('tailor');
Route::get('/dashboard_customer', [DashboardController::class, 'customer'])->middleware(['auth', 'verified'])->name('customer');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/product/{name}', [ProductController::class, 'show'])->name('product');
<<<<<<< HEAD

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
=======
Route::get('/order/{productname}', [OrderController::class, 'register'])->name('order');
Route::get('payment/{order_id}', [DashboardController::class, 'payment'])->name('payment');
Route::get('/preparing/{order_id}', [DashboardController::class, 'preparing'])->name('preparing');
Route::get('finished/{order_id}', [DashboardController::class, 'finished'])->name('finished');
Route::get('delivery/{order_id}', [DashboardController::class, 'delivery'])->name('delivery');
Route::get('canceled/{order_id}', [DashboardController::class, 'canceled'])->name('canceled');
Route::get('cart/{order}', [DashboardController::class, 'cart'])->name('cart');
Route::get('/product_register}', [ProductController::class, 'product_register'])->name('pruductRegister');
Route::get('select_tailor/{order_product_id}', [DashboardController::class, 'select_tailor'])->name('select_tailor');


Route::get('/product_list', [ProductController::class, 'product_list'])->name('product_list');
Route::get('/single-product/{product_id}', [ProductController::class, 'single_product'])->name('single-product');
Route::get('/about', [ProductController::class, 'about'])->name('about');
Route::get('/contact', [ProductController::class, 'contact'])->name('contact');

// Route::get('/single-product/{id}', function () {
//     return view('single-product');
// })->name('single-product');



require __DIR__ . '/auth.php';
>>>>>>> detached-head
