<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Barryvdh\DomPDF\Facade\Pdf;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class ReceiptController extends Controller
{
    public function generateReceipt($rak)
    {
        $products = Product::where('rack_id', $rak)->get();

        if ($products->isEmpty()) {
            return redirect()->back()->with('error', 'Rak tidak ditemukan atau kosong.');
        }

        $pdf = Pdf::loadView('pdf.resi', compact('products', 'rak'))
                  ->setPaper('A5', 'portrait');

        return $pdf->stream("resi_rak_{$rak}.pdf");
    }
}
