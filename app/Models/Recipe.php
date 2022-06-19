<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'product_id',
        'name',
        'description',
        'image',
        'ingredients',
        'steps',
    ];
}
