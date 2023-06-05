<?php

namespace App\Http\Controllers;

use App\Models\Market;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\User;

class DashboardController extends Controller
{
    public function user()
    {
        $user = User::find(auth()->user()->id);
        $markets = Market::where('user_id', auth()->user()->id)->first();
        $data = [
            'title' => 'Dashboard',
            'active' => 'dashboard',
            'users' => auth()->user(),
            'sales' => Transaction::where('user_id', $user->id)->get(),
            'transactions' => Transaction::where('user_id', $user->id)->sum('total_price'),
            'penjualan' => Transaction::where('user_id', $user->id),
            'countTrsc' => Transaction::where('user_id', $user->id)->count(),
            'markets' => Market::where('user_id', $user->id)->get(),
            'products' => Product::where('market_id', $user->id)->get(),            
        ];
        return view('admin.pages.dashboard.users', $data);
    }

    public function admin()
    {
        $this->authorize('admin_has_market');
        $user = User::find(auth()->user()->id);
        $markets = Market::where('user_id', auth()->user()->id)->first();
        $data = [
            'adminTrsc' => Transaction::where('market_id', $markets->id)->count(),
            'adminSales' => Transaction::where('market_id', $markets->id)->sum('total_price'),
            'productToko' => Product::where('market_id', $markets->id)->sum('stock'),
        ];
        return view('admin.pages.dashboard.admin', $data);
    }

    public function suadmin()
    {
        $user = User::find(auth()->user()->id);
        $data = [
            'productAll' => Product::all()->count('id'),
            'jmlToko' => Market::all()->count('id'),
            'sumTrsc' => Transaction::all()->sum('total_price'),
            'sumSales' => Transaction::all()->count(),
            'countUser' => User::where('role','<>','1')->count('id'),
        ];
        return view('admin.pages.dashboard.superadmin', $data);
    }
}
