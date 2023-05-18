<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMarketRequest;
use App\Http\Requests\UpdateMarketRequest;
use App\Models\Market;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class MarketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('superadmin');
        $data = [
            'markets' => Market::paginate(10),
        ];

        return view('admin.pages.markets.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('superadmin');
        $data = [];

        return view('admin.pages.markets.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMarketRequest $request)
    {
        $this->authorize('superadmin');

        $market = new Market();
        $market->name = $request->name;
        $market->email = $request->email;
        $market->address = $request->address;
        $market->phone = $request->phone;

        if ($request->hasFile('image')) {
            $image_market = "market_" . time() . "." . $request->image->extension();
            $request->file('image')->move(public_path('image_markets/'), $image_market);
            $market->image = $image_market;
        } else {
            $market->image = "not_found";
        }
        $market->save();

        return redirect('markets')->with('success', 'Market created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Market $market)
    {
        $this->authorize('superadmin');
        $data = [
            'market' => $market,
        ];

        return view('admin.pages.markets.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Market $market)
    {
        $this->authorize('superadmin');
        $data = [
            'market' => $market,
        ];
        return view('admin.pages.markets.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMarketRequest $request, Market $market)
    {
        $this->authorize('superadmin');

        $market->name = $request->name;
        $market->email = $request->email;
        $market->address = $request->address;
        $market->phone = $request->phone;
        if ($request->hasFile('image_new')) {
            if ($market->image != 'not_found') {
                File::delete(public_path('image_markets/' . $market->image));
            }
            $image_market = "market_" . time() . "." . $request->image_new->extension();
            $request->file('image_new')->move(public_path('image_markets/'), $image_market);
            $market->image = $image_market;
        }
        $market->save();

        return redirect('markets')->with('success', 'Market updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Market $market)
    {
        if ($market->image !== "not_found") {
            unlink(public_path('image_markets/' . $market->image));
        }
        $market->delete();
        return redirect('markets')->with('success', 'Market deleted successfully');
    }
}
