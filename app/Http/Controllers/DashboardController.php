<?php

namespace App\Http\Controllers;

use App\Models\Market;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;

class DashboardController extends Controller
{
    public function user()
    {
        $this->authorize('user');
        $user = User::find(auth()->user()->id);
        $markets = Market::where('user_id', auth()->user()->id)->first();
        $data = [
            'title' => 'Dashboard',
            'active' => 'dashboard',
            'users' => auth()->user(),
            'sales' => Transaction::where('user_id', $user->id)->get(),
            'transactions' => Transaction::where('user_id', $user->id)->sum('total_price'),
            'penjualan' => Transaction::where('user_id', $user->id),
            'sumProduct' => Cart::where('user_id', $user->id)->sum('quantity'),
            'countTrsc' => Transaction::where('user_id', $user->id)->count(),
            'markets' => Market::where('user_id', $user->id)->get(),
            'products' => Product::where('market_id', $user->id)->get(),
        ];
        return view('admin.pages.dashboard.users', $data);
    }

    public function admin()
    {
        $this->authorize('admin');
        $user = User::find(auth()->user()->id);
        // $data = [
        //     'adminTrsc' => Transaction::where('market_id', $markets->id)->count(),
        //     'adminSales' => Transaction::where('market_id', $markets->id)->where('status', 'done')->sum('total_price'),
        //     'adminProduct' => Product::where('market_id', $markets->id)->sum('stock'),
        //     'productToko' => Product::where('market_id', $markets->id)->sum('remainder'),
        //     // 'productSell' => Product::where('market_id', $markets->id ,'stock')->decrease('reminder'),
        // ];
        return view('admin.pages.dashboard.admin');
    }
    public function admin_market()
    {
        $this->authorize('admin_has_market');
        $user = User::find(auth()->user()->id);
        $markets = Market::where('user_id', auth()->user()->id)->first();
        $data = [
            'adminTrsc' => Transaction::where('market_id', $markets->id)->count(),
            'adminSales' => Transaction::where('market_id', $markets->id)->where('status', 'done')->sum('total_price'),
            'adminProduct' => Product::where('market_id', $markets->id)->sum('stock'),
            'productToko' => Product::where('market_id', $markets->id)->sum('remainder'),
            // 'productSell' => Product::where('market_id', $markets->id ,'stock')->decrease('reminder'),
        ];
        return view('admin.pages.dashboard.admin_market', $data);
    }

    public function suadmin()
    {
        $this->authorize('superadmin');
        $user = User::find(auth()->user()->id);
        $data = [
            'productAll' => Product::all()->count('id'),
            'jmlToko' => Market::all()->count('id'),
            'sumTrsc' => Transaction::where('status', 'done')->sum('total_price'),
            'sumSales' => Transaction::where('status', 'done')->count(),
            'countUser' => User::where('role', '<>', '1')->count('id'),
        ];
        return view('admin.pages.dashboard.superadmin', $data);
    }
}
