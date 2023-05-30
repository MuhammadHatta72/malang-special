<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'category',
        'description',
        'stock',
        'remainder',
        'image',
    ];

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    public function market()
    {
        return $this->belongsTo(Market::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'carts')->withPivot('quantity');
    }
}
