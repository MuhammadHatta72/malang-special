<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Market;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\TransactionItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('admin_has_market');
        $market = Market::where('user_id', auth()->user()->id)->first();
        $data = [
            'transactions' => Transaction::with(['transactionitems', 'market', 'user'])
                ->where('market_id', $market->id)->paginate(8)
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

        $productMarketIds = Cart::with(['product'])
            ->whereIn('id', $carts_request)
            ->get()
            ->pluck('product.market_id')
            ->toArray();

        for ($x = 0; $x < count($productMarketIds); $x++) {
            for ($y = count($productMarketIds) - 1; $y >= 0; $y--) {
                if ($productMarketIds[$x] !== $productMarketIds[$y]) {
                    return redirect()->back()->with('error-checkout', 'Ada produk yang berasal dari toko yang berbeda, pastikan produk berasal dari toko yang sama!');
                }
            }
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
        $transaction->status = "procces_payment";
        $transaction->status_payment = "not_yet";
        $transaction->method_payment = "-";
        $transaction->address = "-";
        $transaction->proof_payment = "-";
        $transaction->user_message = "-";

        $transaction->save();

        foreach ($carts_request as $cart_id) {
            $cart = Cart::find($cart_id);
            $transactionItem = new TransactionItem();
            $transactionItem->transaction_id = $transaction->id;
            $transactionItem->cart_id = $cart->id;
            $transactionItem->save();

            $cart->status = "checked";
            $cart->save();
        }

        return redirect('transaction-user/' . $transaction->id)
            ->with('success-checkout', 'Berhasil pesan barang, lanjutkan pembayaran!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaction $transaction)
    {
        $this->authorize('admin_has_market');
        // $market = Market::where('user_id', auth()->user()->id)->first();
        $data = [
            'transaction' => $transaction,
            'transactionItems' => TransactionItem::with(['cart.product'])
                ->where('transaction_id', $transaction->id)
                ->paginate(8)
        ];
        return view('admin.pages.transactions.show', $data);
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
        if ($request->input('procces_payment')) {
            if (!$request->hasFile('proof_payment')) {
                return back()->with('error', 'Bukti Pembayaran wajib disertakan!');
            } else {
                $proof_payment = "proof_payment_" . time() . "." . $request->proof_payment->extension();
                $request->file('proof_payment')->move(public_path('image_proof_payments/'), $proof_payment);
                $transaction->proof_payment = $proof_payment;
            }
            $transaction->method_payment = $request->input('metode_payment');
            $transaction->address = $request->input('address');
            $transaction->save();

            // $redirectPage = auth()->user()->role == "2" ? "transactions" : "transaction-user";

            return redirect('transaction-user')->with('success', 'Pembayaran akan diproses oleh admin!');
        } elseif ($request->input('procces_transaction')) {
            $transaction->status_payment = 'done';
            $transaction->status = 'procces_send';
            $transaction->save();
            return redirect('transactions')->with('success', 'Pembayaran telah berhasil, tunggu barang dikirim oleh kurir!');
        } elseif ($request->input('procces_send')) {
            $transaction->status = 'product_received';
            $transaction->user_message = $request->input('user_message');
            $transaction->save();
            return redirect('transaction-user')->with('success', 'Penilaian berhasil!');
        } elseif ($request->input('product_end')) {
            $transaction->status = 'done';
            $transaction->save();

            $transactionItems = TransactionItem::with(['cart.product'])
                ->where('transaction_id', $transaction->id)
                ->get();
            foreach ($transactionItems as $transactionItem) {
                $cart = Cart::find($transactionItem->cart_id);
                $product = Product::find($cart->product->id);
                $product->remainder -= $cart->quantity;
                $product->save();
            }

            return redirect('transactions')->with('success', 'Transaksi Berhasil');
        } else {
            return back()->with('error', 'Perintah salah!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
