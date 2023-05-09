<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MarketController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
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

Route::get('login', [PagesController::class, 'login']);
Route::get('register', [PagesController::class, 'register']);
Route::get('/', [PagesController::class, 'dashboard']);
Route::get('profile', [PagesController::class, 'profile']);
Route::get('profile/{id}/edit', [PagesController::class, 'editProfile']);

Route::resource('users', UserController::class);
Route::resource('markets', MarketController::class);
Route::resource('products', ProductController::class);
Route::resource('carts', CartController::class);
Route::resource('payments', PaymentController::class);
Route::get('report-users', [ReportController::class, 'users']);
Route::get('report-markets', [ReportController::class, 'markets']);
Route::get('report-products', [ReportController::class, 'products']);
Route::get('report-transactions', [ReportController::class, 'transactions']);
