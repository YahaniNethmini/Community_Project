<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'name',
        'description',
        'image',
        'price',
        'stock_quantity'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}