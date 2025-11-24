<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $table = 'stocks';   // nama tabel
    protected $fillable = [
        'product_id',
        'jumlah',
        'lokasi_rak'
    ];
}
