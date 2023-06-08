<?php


use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\PasswordReset;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use App\Http\Controllers\CartController;
use App\Http\Controllers\MarketAdminController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MarketController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\TransactionItemController;
use App\Http\Controllers\TransactionUserController;
use App\Http\Controllers\DashboardController;

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

Route::get('forgot-password', [PagesController::class, 'forgot_password'])->middleware('guest')->name('password.request');
Route::post('forgot-password', [PagesController::class, 'forgot_proses'])->middleware('guest')->name('password.email');;
Route::get('reset-password/{token}', [PagesController::class, 'reset_password'])->middleware('guest')->name('password.reset');
Route::post('reset-password', [PagesController::class, 'reset_proses'])->middleware('guest')->name('password.update');

Route::get('detail/{id}', [PagesController::class, 'detail']);
Route::get('checkout', [PagesController::class, 'checkout']);
Route::get('/', [PagesController::class, 'home']);
Route::get('shop', [PagesController::class, 'shop']);
Route::get('foods', [PagesController::class, 'food']);
Route::get('drinks', [PagesController::class, 'drink']);
Route::get('shirts', [PagesController::class, 'shirt']);
Route::get('souvenirs', [PagesController::class, 'souvenir']);
Route::resource('carts', CartController::class);
Route::middleware('guest')->group(function () {
    Route::get('login', [PagesController::class, 'login'])->name('login');
    Route::post('login', [PagesController::class, 'loginProcess']);
    Route::get('register', [PagesController::class, 'register']);
    Route::post('register', [PagesController::class, 'registerProcess']);
});

Route::middleware('auth')->group(function () {
    Route::get('dashboard-user', [DashboardController::class, 'user']);
    Route::get('dashboard-admin-market', [DashboardController::class, 'admin_market']);
    Route::get('dashboard-admin', [DashboardController::class, 'admin']);
    Route::get('dashboard-superadmin', [DashboardController::class, 'suadmin']);
    Route::resource('profile', ProfileController::class);
    Route::resource('users', UserController::class);
    Route::resource('markets', MarketController::class);
    Route::delete('markets/delete-image/{market}', [MarketController::class, 'destroyImage']);
    Route::resource('market-admin', MarketAdminController::class);
    Route::resource('products', ProductController::class);
    Route::delete('products/delete-image/{product}', [ProductController::class, 'destroyImage']);
    Route::resource('transactions', TransactionController::class);
    Route::resource('transactionitems', TransactionItemController::class);
    Route::resource('transaction-user', TransactionUserController::class);
    Route::get('report-users', [ReportController::class, 'users']);
    Route::get('report-markets', [ReportController::class, 'markets']);
    Route::get('report-products', [ReportController::class, 'products']);
    Route::get('report-transactions', [ReportController::class, 'transactions']);
    Route::post('export-users-excel', [ReportController::class, 'exportUsersExcel']);
    Route::post('export-users-pdf', [ReportController::class, 'exportUsersPDF']);
    Route::post('export-markets-excel', [ReportController::class, 'exportMarketsExcel']);
    Route::post('export-markets-pdf', [ReportController::class, 'exportMarketsPDF']);
    Route::post('export-products-excel', [ReportController::class, 'exportProductsExcel']);
    Route::post('export-products-pdf', [ReportController::class, 'exportProductsPDF']);
    Route::post('export-transactions-excel', [ReportController::class, 'exportTransactionsExcel']);
    Route::post('export-transactions-pdf', [ReportController::class, 'exportTransactionsPDF']);
    Route::get('logout', [PagesController::class, 'logout']);
});
