<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Rack;
use App\Models\Stock;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'kode_barang',
        'nama_barang',
        'satuan',
        'stok_minimum',
        'rack_id'
    ];

    public function rack()
    {
        return $this->belongsTo(Rack::class, 'rack_id');
    }

    public function stock()
    {
        return $this->hasOne(Stock::class, 'product_id');
    }
}
