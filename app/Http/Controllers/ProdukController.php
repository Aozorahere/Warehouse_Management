<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // asumsikan model ada
use App\Models\Stock;
use App\Models\Rack;
use App\Models\Inbound;
use App\Models\Outbound;

class ProdukController extends Controller
{
    public function index()
    {
        // ringkasan
        $counts = [
            'total_products' => Product::count(),
            'total_stock' => Stock::sum('quantity'),
            'total_racks' => Rack::count()
        ];
        return view('produk.index', compact('counts'));
    }

    public function stok()
    {
        $items = Product::with('stock')->get();
        return view('produk.stok', compact('items'));
    }

    public function rak()
    {
        $racks = Rack::all();
        return view('produk.rak', compact('racks'));
    }

    public function masuk()
    {
        $inbounds = Inbound::latest()->with('product')->get();
        return view('produk.masuk', compact('inbounds'));
    }

    public function keluar()
    {
        $outbounds = Outbound::latest()->with('product')->get();
        return view('produk.keluar', compact('outbounds'));
    }
}
