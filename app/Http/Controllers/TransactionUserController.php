<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\TransactionItem;
use Illuminate\Http\Request;

class TransactionUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('user');
        $data = [
            'transactions' => Transaction::with(['transactionitems', 'market', 'user'])
                ->where('user_id', auth()->user()->id)->paginate(1)
        ];
        return view('admin.pages.transactions-user.index', $data);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $this->authorize('user');
        // $market = Market::where('user_id', auth()->user()->id)->first();
        $transaction = Transaction::findOrFail($id);
        $data = [
            'transaction' => $transaction,
            'transactionItems' => TransactionItem::with(['cart.product'])
                ->where('transaction_id', $transaction->id)
                ->paginate(1),
            'metode_payments' => [
                // 'Bayar Langsung' => 'Bayar Langsung',
                'Transfer' => 'Transfer',
            ]
        ];
        return view('admin.pages.transactions-user.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
