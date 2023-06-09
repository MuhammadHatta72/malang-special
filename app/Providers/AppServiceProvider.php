<?php

namespace App\Providers;

use App\Models\Market;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::define('superadmin', function (User $user) {
            return $user->role === '1';
        });
        Gate::define('admin', function (User $user) {
            // return $user->role === '2';
            $market = Market::where('user_id', $user->id)->first();
            if (!$market) {
                return $user->role === '2';
            } else {
                return false;
            }
        });
        Gate::define('user', function (User $user) {
            return $user->role === '3';
        });
        Gate::define('superadmin_admin', function (User $user) {
            return $user->role !== '3';
        });
        Gate::define('admin_user', function (User $user) {
            return $user->role !== '1';
        });
        Gate::define('admin_has_market', function (User $user) {
            $market = Market::where('user_id', $user->id)->first();
            if ($market) {
                return $user->role === '2' && $market->user_id === $user->id;
            } else {
                return false;
            }
        });
    }
}
