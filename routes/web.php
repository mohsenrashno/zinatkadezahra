<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\DashboardController;
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
Route::get('/order/{id}', [OrderController::class, 'register'])->name('order');
Route::get('payment/{id}', [DashboardController::class, 'payment'])->name('payment');
Route::get('preparing/{id}', [DashboardController::class, 'preparing'])->name('preparing');
Route::get('finished/{id}', [DashboardController::class, 'finished'])->name('finished');
Route::get('delivery/{id}', [DashboardController::class, 'delivery'])->name('delivery');
Route::get('cart/{id}', [DashboardController::class, 'cart'])->name('cart');

require __DIR__ . '/auth.php';