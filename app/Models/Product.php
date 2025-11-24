<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

    // Relasi opsional ke tabel racks
    public function rack()
    {
        return $this->belongsTo(rack::class, 'rack_id');
    }
}
