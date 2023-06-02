<?php

namespace App\Http\Controllers;

use App\Models\Market;
use App\Models\Product;
use App\Models\Report;
use App\Models\User;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function users()
    {
        $this->authorize('superadmin');
        $data = [
            'users' => User::paginate(10),
        ];

        return view('admin.pages.reports.users', $data);
    }

    public function markets()
    {
        $this->authorize('superadmin');
        $data = [
            'markets' => Market::paginate(10)
        ];

        return view('admin.pages.reports.markets', $data);
    }

    public function products()
    {
        $this->authorize('admin_has_market');
        $user = User::find(auth()->user()->id);
        $data = [
            'products' => Product::where('market_id', $user->market->id)->paginate(1),
        ];

        return view('admin.pages.reports.products', $data);
    }

    public function transactions()
    {
        $this->authorize('admin_has_market');
        $data = [];

        return view('admin.pages.reports.transactions', $data);
    }
}
