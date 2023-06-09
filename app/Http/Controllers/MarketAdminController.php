<?php

namespace App\Http\Controllers;

use App\Models\Market;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class MarketAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('admin_has_market');
        $data = [
            'market' => Market::with('user')->where('user_id', Auth::user()->id)->first()
        ];
        return view('admin.pages.market-admin.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $this->authorize('admin_has_market');
        $data = [
            'market' => Market::with('user')->where('id', $id)->first()
        ];
        return view('admin.pages.market-admin.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->authorize('admin_has_market');

        $market = Market::find($id);
        $market->name = $request->name;
        $market->email = $request->email;
        $market->address = $request->address;
        $market->phone = $request->phone;
        $market->no_bca = $request->no_bca;
        $market->no_bni = $request->no_bni;
        $market->no_bri = $request->no_bri;
        $market->no_mandiri = $request->no_mandiri;
        if ($request->hasFile('image_new')) {
            if ($market->image != 'not_found') {
                File::delete(public_path('image_markets/' . $market->image));
            }
            $image_market = "market_" . time() . "." . $request->image_new->extension();
            $request->file('image_new')->move(public_path('image_markets/'), $image_market);
            $market->image = $image_market;
        }
        $market->save();

        return redirect('market-admin')->with('success', 'Market updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->authorize('admin_has_market');
        $market = Market::find($id);
        if ($market->image !== "not_found") {
            unlink(public_path('image_markets/' . $market->image));
        }
        $market->image = "not_found";
        $market->save();
        return redirect('market-admin')->with('success', 'Market image deleted successfully');
    }
}
