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
        $data = [
            'title_page' => 'carts',
            'carts' => Cart::with(['user', 'product.market',])->where('user_id', auth()->user()->id)->get(),
        ];
        return view('user.pages.carts', $data);
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

        $product->remainder = $product->remainder - 1;
        $product->save();


        $cart = new Cart();
        $cart->product_id = $request->product_id;
        $cart->user_id = auth()->user()->id;
        $cart->quantity = 1;
        $cart->save();


        return redirect('/carts')->with('success-checkout', 'Produk berhasil ditambahkan ke keranjang!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cart $cart)
    {
        //
    }
}
