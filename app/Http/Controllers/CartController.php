<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('user');
        $data = [
            'title_page' => 'carts',
            'carts' => Cart::with(['user', 'product.market',])
                ->where('user_id', auth()->user()->id)
                ->where('status', 'not-checked')
                ->get(),
        ];
        return view('user.pages.carts.index', $data);
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
        $product = Product::find($request->product_id);

        if ($product->remainder < 1) {
            return redirect('/carts')->with('error-checkout', 'Produk tidak tersedia, silahkan pilih produk lain!');
        }


        $cart = new Cart();
        $cart->product_id = $request->product_id;
        $cart->user_id = auth()->user()->id;
        $cart->quantity = 1;
        $cart->status = 'not-checked';
        $cart->save();


        return redirect('/carts')->with('success-checkout', 'Produk berhasil ditambahkan ke keranjang!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cart $cart)
    {
        $this->authorize('user');
        $data = [
            'title_page' => 'Detail Keranjang',
            'cart' => Cart::with(['user', 'product.market',])
                ->where('id', $cart->id)
                ->first(),
        ];
        return view('user.pages.carts.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cart $cart)
    {
        $this->authorize('user');
        $data = [
            'title_page' => 'Edit Keranjang',
            'cart' => Cart::with(['user', 'product.market',])
                ->where('id', $cart->id)
                ->first(),
        ];
        return view('user.pages.carts.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cart $cart)
    {
        $rules = [
            'quantity' => 'required|numeric'
        ];

        $messages = [
            'quantity.required' => 'Jumlah Produk yang dibeli tidak boleh kosong!',
            'quantity.numeric' => 'Jumlah Produk yang dibeli harus angka!',
        ];

        $request->validate($rules, $messages);

        $cart_product = Cart::with(['user', 'product.market',])
            ->where('id', $cart->id)
            ->first();

        if ($cart_product->product->remainder < $request->quantity) {
            return back()->with('error-checkout', 'Jumlah pembelian melebihi produk yang tersedia!');
        }

        $cart->quantity = $request->quantity;
        $cart->save();

        return back()->with('success-checkout', 'Produk berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cart $cart)
    {
        $cart->delete();
        return redirect('/carts')->with('success-checkout', 'Produk berhasil dihapus dari keranjang!');
    }
}
