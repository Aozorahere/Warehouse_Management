<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Inbound;
use App\Models\Outbound;
use App\Models\Rack;
use App\Models\Stock;

class ProdukController extends Controller
{
    public function index()
    {
        $counts = [
            'total_products' => Product::count(),
            'total_stock' => Stock::sum('jumlah_stok'),
            'total_racks' => Rack::count(),
            'total_inbounds' => Inbound::count(),
            'total_outbounds' => Outbound::count(),
        ];

        return view('produk.index', compact('counts'));
    }

    public function stock()
    {
        $items = Product::with('stock')->get();
        return view('stok.index', compact('items'));
    }

    public function rak()
    {
        $racks = Rack::all();
        return view('rak.index', compact('racks'));
    }

    public function masuk()
    {
        $inbounds = Inbound::latest()->with('product')->get();
        return view('barang_masuk.index', compact('inbounds'));
    }

    public function keluar()
    {
        $outbounds = Outbound::latest()->with('product')->get();
        return view('barang_keluar.index', compact('outbounds'));
    }
}

