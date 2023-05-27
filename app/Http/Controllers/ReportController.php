<?php

namespace App\Http\Controllers;

use App\Models\Market;
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
        $data = [
            'users' => User::paginate(10),
        ];

        return view('admin.pages.reports.users', $data);
    }

    public function markets()
    {
        $data = [
            'markets' => Market::paginate(10)
        ];

        return view('admin.pages.reports.markets', $data);
    }

    public function products()
    {
        $data = [];

        return view('admin.pages.reports.products', $data);
    }

    public function transactions()
    {
        $data = [];

        return view('admin.pages.reports.transactions', $data);
    }
}
