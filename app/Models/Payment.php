<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'date_of_transaction',
        'total_product',
        'shipping_costs',
        'admin_costs',
        'total_payment',
        'payment_user',
        'buyer_address',
        'proof_of_payment',
    ];
}
