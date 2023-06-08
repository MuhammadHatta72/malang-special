<?php

namespace App\Http\Controllers;

use App\Exports\MarketExport;
use App\Exports\ProductExport;
use App\Exports\TransactionExport;
use App\Exports\UserExport;
use App\Models\Market;
use App\Models\Product;
use App\Models\Report;
use App\Models\Transaction;
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
        $market = Market::where('user_id', auth()->user()->id)->first();
        $data = [
            'transactions' => Transaction::with(['transactionitems', 'market', 'user'])
                ->where('market_id', $market->id)->paginate(8)
        ];

        return view('admin.pages.reports.transactions', $data);
    }

    //Export
    public function exportUsersExcel()
    {
        $count_users = User::all();
        if (count($count_users) < 1) {
            return redirect()->back()->with('error', 'Belum ada pengguna!');
        }
        return Excel::download(new UserExport, 'Laporan Daftar User.xlsx');
    }
    public function exportUsersPDF()
    {
        $count_users = User::all();
        
        if (count($count_users) < 1) {
            return redirect()->back()->with('error', 'Belum ada pengguna!');
        }
        $data = [
            'users' => User::all()
        ];
        $pdf = PDF::loadview('admin.pages.exports.pdf.users', $data)->setPaper('a4', 'landscape');

        return $pdf->download('Laporan Daftar User.pdf');
    }

    public function exportMarketsExcel()
    {
        $count_markets = Market::with('user')->get();
        if (count($count_markets) < 1) {
            return redirect()->back()->with('error', 'Belum ada toko!');
        }
        return Excel::download(new MarketExport, 'Laporan Daftar Toko.xlsx');
    }
    public function exportMarketsPDF()
    {
        $count_markets = Market::with('user')->get();
        if (count($count_markets) < 1) {
            return redirect()->back()->with('error', 'Belum ada toko!');
        }
        $data = [
            'markets' => Market::with('user')->get()
        ];
        $pdf = PDF::loadview('admin.pages.exports.pdf.markets', $data)->setPaper('a4', 'landscape');

        return $pdf->download('Laporan Daftar Toko.pdf');
    }
    public function exportProductsExcel()
    {
        $market = Market::where('user_id', auth()->user()->id)->first();
        $count_products = Product::where('market_id', $market->id)->count();
        if ($count_products < 1) {
            return redirect()->back()->with('error', 'Belum ada produk!');
        }
        return Excel::download(new ProductExport, 'Laporan Daftar Produk ' . $market->name . '.xlsx');
    }
    public function exportProductsPDF()
    {
        $market = Market::where('user_id', auth()->user()->id)->first();
        $count_products = Product::where('market_id', $market->id)->count();
        if ($count_products < 1) {
            return redirect()->back()->with('error', 'Belum ada produk!');
        }
        $user = User::find(auth()->user()->id);
        $market = Market::where('user_id', auth()->user()->id)->first();
        $data = [
            'products' => Product::with('market')->where('market_id', $user->market->id)->get(),
            'market' => Market::where('user_id', auth()->user()->id)->first()
        ];
        $pdf = PDF::loadview('admin.pages.exports.pdf.products', $data)->setPaper('a4', 'landscape');

        return $pdf->download('Laporan Daftar Produk ' . $market->name . '.pdf');
    }
    public function exportTransactionsExcel()
    {
        $market = Market::where('user_id', auth()->user()->id)->first();
        $count_transaction = Transaction::where('market_id', $market->id)->count();
        if ($count_transaction < 1) {
            return redirect()->back()->with('error', 'Belum ada transaksi!');
        }
        $market = Market::where('user_id', auth()->user()->id)->first();
        return Excel::download(new TransactionExport, 'Laporan Daftar Transaksi ' . $market->name . '.xlsx');
    }
    public function exportTransactionsPDF()
    {
        $market = Market::where('user_id', auth()->user()->id)->first();
        $count_transaction = Transaction::where('market_id', $market->id)->count();
        if ($count_transaction < 1) {
            return redirect()->back()->with('error', 'Belum ada transaksi!');
        }
        $data = [
            'transactions' => Transaction::with(['transactionitems', 'market', 'user'])
                ->where('market_id', $market->id)->get(),
            'market' => $market
        ];
        $pdf = PDF::loadview('admin.pages.exports.pdf.transactions', $data)->setPaper('a4', 'landscape');

        return $pdf->download('Laporan Daftar Transaksi ' . $market->name . '.pdf');
    }
}
