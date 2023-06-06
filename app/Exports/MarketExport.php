<?php

namespace App\Exports;

use App\Models\Market;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class MarketExport implements FromView
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function view(): View
    {
        $data = [
            'markets' => Market::with('user')->get()
        ];
        return view('admin.pages.exports.excel.markets', $data);
    }
}
