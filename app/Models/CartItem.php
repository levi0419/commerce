<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'shopping_session_id',
        'product_id',
        'quantity',
    ];

    public function shoppingSession()
    {
        return $this->belongsTo('App\Models\ShoppingSession', 'shopping_session_id');
    }

    public function product()
    {
        return $this->belongsTo('App\Models\Product', 'product_id');
    }
}
