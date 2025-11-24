<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inbound extends Model
{
    protected $fillable = [
        'product_id',
        'quantity',
        'reference',
        'date'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
