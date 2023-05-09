<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function users()
    {
        $data = [];

        return view('admin.pages.reports.users', $data);
    }

    public function markets()
    {
        $data = [];

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
