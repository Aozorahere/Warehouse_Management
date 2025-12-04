<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rack extends Model
{
    use HasFactory;

    protected $table = 'racks';

    protected $fillable = [
        'kode_rak',
        'lokasi',
        'kapasitas',
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'rak_id');
    }

    public function inbounds()
    {
        return $this->hasMany(Inbound::class, 'rack_id');
    }

    public function outbounds()
    {
        return $this->hasMany(Outbound::class, 'rack_id');
    }
}
