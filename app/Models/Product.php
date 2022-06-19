<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'name',
        'description',
        'price',
        'rating',
        'category_id',
        'inventory_id',
        'discount_id',
        'recipe_id',
        'is_active',
        
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\ProductCategory', 'category_id');
    }

    public function inventory()
    {
        return $this->belongsTo('App\Models\ProductInventory', 'inventory_id');
    }

    public function discount()
    {
        return $this->belongsTo('App\Models\Discount', 'discount_id');
    }

    public function recipe()
    {
        return $this->belongsTo('App\Models\Recipe', 'recipe_id');
    }

    public function shoppingSession()
    {
        return $this->belongsToMany('App\Models\ShoppingSession', 'shopping_session_product');
    }

    public function shoppingSessionProduct()
    {
        return $this->hasMany('App\Models\ShoppingSessionProduct', 'product_id');
    }


}
