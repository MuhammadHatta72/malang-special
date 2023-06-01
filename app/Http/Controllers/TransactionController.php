<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\TransactionItem;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('admin_has_market');
        $data = [
            'transactions' => Transaction::with(['transactionitems', 'market'])->paginate(1)
        ];

        return view('admin.pages.transactions.index', $data);
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
        $carts_request = $request->cart_id;
        $market_id = "";
        $total_price = 0;

        if (empty($carts_request)) {
            return redirect()->back()->with('error-checkout', 'Keranjang belanja kosong!');
        }

        foreach ($carts_request as $cart_id) {
            $cart = Cart::find($cart_id);
            if ($cart->product->remainder < $cart->quantity) {
                return redirect()->back()->with('error-checkout', 'Produk tidak tersedia!');
            }
            $market_id = $cart->product->market_id;
            $total_price += $cart->quantity * $cart->product->price;
        }

        $transaction = new Transaction();
        $transaction->user_id = auth()->user()->id;
        $transaction->market_id = $market_id;
        $transaction->token = Str::random(20);
        $transaction->date = date('Y-m-d');
        $transaction->total_price = $total_price + 10000;
        $transaction->status = "procces";
        $transaction->status_payment = "not_yet";
        $transaction->method_payment = "";
        $transaction->address = "";
        $transaction->save();

        foreach ($carts_request as $cart_id) {
            $cart = Cart::find($cart_id);
            $transactionItem = new TransactionItem();
            $transactionItem->transaction_id = $transaction->id;
            $transactionItem->cart_id = $cart->id;
            $transactionItem->save();

            $cart->status = "checked";
            $cart->save();

            $product = Product::find($cart->product->id);
            $product->remainder -= $cart->quantity;
            $product->save();
        }

        return redirect('carts')->with('success-checkout', 'Berhasil pesan barang, lanjutkan pembayaran!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
