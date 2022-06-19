<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPayment extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'user_id',
        'method',
        'provider',
        'amount',
        'date',
        'status',
        'account_number',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
