<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MarketController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('checkout', [PagesController::class, 'checkout']);
Route::get('/', [PagesController::class, 'landing']);
Route::get('shop', [PagesController::class, 'shop']);
Route::get('contact', [PagesController::class, 'contact']);
Route::middleware('guest')->group(function () {
    Route::get('login', [PagesController::class, 'login'])->name('login');
    Route::post('login', [PagesController::class, 'loginProcess']);
    Route::get('register', [PagesController::class, 'register']);
    Route::post('register', [PagesController::class, 'registerProcess']);
});

Route::middleware('auth')->group(function () {
    Route::get('dashboard', [PagesController::class, 'dashboard'])->name('dashboard');
    Route::resource('profile', ProfileController::class);
    Route::resource('users', UserController::class);
    Route::resource('markets', MarketController::class);
    Route::delete('markets/delete-image/{market}', [MarketController::class, 'destroyImage']);
    Route::resource('products', ProductController::class);
    Route::delete('products/delete-image/{product}', [ProductController::class, 'destroyImage']);
    Route::resource('carts', CartController::class);
    Route::resource('payments', PaymentController::class);
    Route::get('report-users', [ReportController::class, 'users']);
    Route::get('report-markets', [ReportController::class, 'markets']);
    Route::get('report-products', [ReportController::class, 'products']);
    Route::get('report-transactions', [ReportController::class, 'transactions']);
    Route::get('logout', [PagesController::class, 'logout']);
});
