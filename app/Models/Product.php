<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'sku',
        'nama_produk',
        'kategori',
        'rak_id',
        'satuan',
        'deskripsi',
    ];

    public function rack()
    {
        return $this->belongsTo(Rack::class, 'rak_id');
    }

    public function stock()
    {
        return $this->hasOne(Stock::class, 'product_id');
    }

    public function inbounds()
    {
        return $this->hasMany(Inbound::class, 'product_id');
    }

    public function outbounds()
    {
        return $this->hasMany(Outbound::class, 'product_id');
    }
}
