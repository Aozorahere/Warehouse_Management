<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; 
use App\Models\Inbound;
use App\Models\Outbound;
use App\Models\Rack;
use App\Models\Rak;
use App\Models\Stock;

class ProdukController extends Controller
{
    public function index()
    {
        $counts = [
            'total_products' => Product::count(),
            'total_stock' => Stock::sum('jumlah_stok'),
            'total_racks' => Rack::count('kode_rak'),
            'total_inbounds' => Inbound::count(),
            'total_outbounds' => Outbound::count(),
        ];
        return view('produk.index', compact('counts'));
    }

    public function stock()
    {
        $items = Product::with('stock')->get();
        return view('produk.stok', compact('items'));
    }

    public function rak()
    {
        $racks = rack::all();
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
