<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Stock extends Model
{
    protected $table = 'stocks';

    protected $fillable = [
        'product_id',
        'jumlah_stok',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
