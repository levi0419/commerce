<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymeentDetail extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'order_id',
        'amount',
        'provider',
        'status',
       
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
