<?php

namespace App\Http\Controllers;

use App\Models\Market;
use Illuminate\Http\Request;

class MarketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [];

        return view('admin.pages.markets.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [];

        return view('admin.pages.markets.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $data = [];

        return view('admin.pages.markets.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $data = [];

        return view('admin.pages.markets.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Market $market)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Market $market)
    {
        //
    }
}
