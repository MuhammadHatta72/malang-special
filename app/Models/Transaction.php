<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'token',
        'date',
        'price',
        'status',
        'status_payment',
        'address',
        'method_payment',
        'proof_payment',
        'user_message',
    ];

    public function transactionitems()
    {
        return $this->hasMany(TransactionItem::class);
    }

    public function market()
    {
        return $this->belongsTo(Market::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
