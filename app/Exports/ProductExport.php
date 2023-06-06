<?php

namespace App\Exports;

use App\Models\Market;
use App\Models\Product;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ProductExport implements FromView
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function view(): View
    {
        $user = User::find(auth()->user()->id);
        $data = [
            'products' => Product::where('market_id', $user->market->id)->get(),
            'market' => Market::where('user_id', auth()->user()->id)->first()
        ];
        return view('admin.pages.exports.excel.products', $data);
    }
}
