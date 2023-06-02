<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\TransactionItem;
use Illuminate\Http\Request;

class TransactionItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function show(TransactionItem $transactionitem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TransactionItem $transactionitem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TransactionItem $transactionitem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TransactionItem $transactionitem)
    {
        // $cart = Cart::findOrFail($transactionitem->cart_id);
        // $cart->status = 'not-checked';
        // $cart->save();
    }
}
