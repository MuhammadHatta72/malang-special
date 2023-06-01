<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'transaction_id',
        'cart_id',
    ];

    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }

    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }
}
