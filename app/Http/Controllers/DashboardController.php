<?php

namespace App\Http\Controllers;

use App\Models\Market;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
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
            'adminTrsc' => Transaction::all()->count(),
            'adminSales' => Transaction::all()->sum('total_price'),
            'products' => Product::where('market_id', $user->id)->get(),
            'productToko' => $markets == null ? 'Belum ada' : Product::where('market_id', $markets->id)->sum('stock'),
        ];
        return view('admin.pages.dashboard', $data);
    }
}
