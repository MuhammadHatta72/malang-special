<?php

namespace App\Http\Controllers;

use App\Exports\MarketExport;
use App\Exports\UserExport;
use App\Models\Market;
use App\Models\Product;
use App\Models\Report;
use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function users()
    {
        $this->authorize('superadmin');
        $data = [
            'users' => User::paginate(10),
        ];

        return view('admin.pages.reports.users', $data);
    }

    public function markets()
    {
        $this->authorize('superadmin');
        $data = [
            'markets' => Market::paginate(10)
        ];

        return view('admin.pages.reports.markets', $data);
    }

    public function products()
    {
        $this->authorize('admin_has_market');
        $user = User::find(auth()->user()->id);
        $data = [
            'products' => Product::where('market_id', $user->market->id)->paginate(10),
        ];

        return view('admin.pages.reports.products', $data);
    }

    public function transactions()
    {
        $this->authorize('admin_has_market');
        $data = [];

        return view('admin.pages.reports.transactions', $data);
    }

    //Export
    public function exportUsersExcel()
    {
        return Excel::download(new UserExport, 'Laporan Daftar User.xlsx');
    }
    public function exportUsersPDF()
    {
        $data = [
            'users' => User::all()
        ];
        $pdf = PDF::loadview('admin.pages.exports.pdf.users', $data)->setPaper('a4', 'landscape');

        return $pdf->download('Laporan Daftar User.pdf');
    }

    public function exportMarketsExcel()
    {
        return Excel::download(new MarketExport, 'Laporan Daftar Toko.xlsx');
    }
    public function exportMarketsPDF()
    {
        $data = [
            'markets' => Market::with('user')->get()
        ];
        $pdf = PDF::loadview('admin.pages.exports.pdf.markets', $data)->setPaper('a4', 'landscape');

        return $pdf->download('Laporan Daftar Toko.pdf');
    }
}
