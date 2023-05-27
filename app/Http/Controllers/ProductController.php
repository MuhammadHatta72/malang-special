<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Market;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $this->authorize('admin_has_market');
        $market = User::find(auth()->user()->id);
        $data = [
            'products' => Product::where('market_id', $market->market->id)->paginate(10),
        ];
        return view('admin.pages.products.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('admin_has_market');
        $data = [
            'categorys' => [
                'Baju', 'Makanan', 'Minuman', 'Souvenir'
            ]
        ];

        return view('admin.pages.products.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $this->authorize('admin_has_market');

        // $market = Market::where('user_id', auth()->user()->id)->first();
        $market = User::find(auth()->user()->id);
        $market->load('market');

        $product = new Product();
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->category = $request->input('category');
        $product->description = $request->input('description');
        $product->stock = $request->input('stock');
        $product->remainder = $request->input('stock');
        $product->market_id = $market->market->id;
        if ($request->hasFile('image')) {
            $image_product = "product_" . time() . "." . $request->image->extension();
            $request->file('image')->move(public_path('image_products/'), $image_product);
            $product->image = $image_product;
        } else {
            $product->image = "not_found";
        }
        $product->save();

        return redirect('products')->with('success', 'Product created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        $this->authorize('admin_has_market');
        $data = [
            'product' => $product,
        ];

        return view('admin.pages.products.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $this->authorize('admin_has_market');
        $data = [
            'product' => $product,
            'categorys' => [
                'Baju', 'Makanan', 'Minuman', 'Souvenir'
            ]
        ];

        return view('admin.pages.products.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $this->authorize('admin_has_market');

        $product->name = $request->input('name');
        $product->category = $request->input('category');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        if ($request->hasFile('image_new')) {
            if ($product->image != 'not_found') {
                File::delete(public_path('image_products/' . $product->image));
            } else {
                $image_product = "product" . time() . "." . $request->image_new->extension();
                $request->file('image_new')->move(public_path('image_products/'), $image_product);
                $product->image = $image_product;
            }
        }
        $product->save();

        return redirect('products')->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $this->authorize('admin_has_market');
        if ($product->image !== "not_found") {
            unlink(public_path('image_products/' . $product->image));
        }
        $product->delete();
        return redirect('products')->with('success', 'Product deleted successfully');
    }

    public function destroyImage(Product $product)
    {
        $this->authorize('admin_has_market');
        if ($product->image !== "not_found") {
            unlink(public_path('image_products/' . $product->image));
        }
        $product->image = "not_found";
        $product->save();
        return redirect('products')->with('success', 'Product image deleted successfully');
    }
}
