<?php


use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\PasswordReset;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
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

Route::get('forgot-password', function () {
    return view('admin.pages.auth.forgot-password');
})->middleware('guest')->name('password.request');

Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);
 
    $status = Password::sendResetLink(
        $request->only('email')
    );
 
    return $status === Password::RESET_LINK_SENT
                ? back()->with(['status' => __($status)])
                : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('password.email');

Route::get('/reset-password/{token}', function (string $token) {
    return view('admin.pages.auth.reset-password', ['token' => $token]);
})->middleware('guest')->name('password.reset');

Route::post('/reset-password', function (Request $request) {
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:8|confirmed',
    ]);
 
    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function (User $user, string $password) {
            $user->forceFill([
                'password' => Hash::make($password)
            ]);
 
            $user->save();
 
            event(new PasswordReset($user));
        }
    );
    return $status === Password::PASSWORD_RESET
                ? redirect()->route('login')->with('status', __($status))
                : back()->withErrors(['email' => [__($status)]]);
})->middleware('guest')->name('password.update');

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
    Route::get('dashboard', [PagesController::class, 'dashboard'])->name('dashboard');
    Route::resource('profile', ProfileController::class);
    Route::resource('users', UserController::class);
    Route::resource('markets', MarketController::class);
    Route::delete('markets/delete-image/{market}', [MarketController::class, 'destroyImage']);
    Route::resource('products', ProductController::class);
    Route::delete('products/delete-image/{product}', [ProductController::class, 'destroyImage']);
    Route::resource('payments', PaymentController::class);
    Route::get('report-users', [ReportController::class, 'users']);
    Route::get('report-markets', [ReportController::class, 'markets']);
    Route::get('report-products', [ReportController::class, 'products']);
    Route::get('report-transactions', [ReportController::class, 'transactions']);
    Route::get('logout', [PagesController::class, 'logout']);
});


