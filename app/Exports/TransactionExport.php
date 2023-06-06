<?php

namespace App\Exports;

use App\Models\Market;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class TransactionExport implements FromView
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function view(): View
    {
        $market = Market::where('user_id', auth()->user()->id)->first();
        $data = [
            'transactions' => Transaction::with(['transactionitems', 'market', 'user'])
                ->where('market_id', $market->id)->get(),
            'market' => $market
        ];
        return view('admin.pages.exports.excel.transactions', $data);
    }
}
