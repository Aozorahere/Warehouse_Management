<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Barryvdh\DomPDF\Facade\Pdf;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class PrintController extends Controller
{
    public function printByRak($rak)
    {
        $products = Product::where('rak', $rak)->get();

        if ($products->isEmpty()) {
            return back()->with('error', 'Rak tidak ditemukan atau kosong.');
        }

        $pdf = Pdf::loadView('print.label_rak', compact('products', 'rak'))
                  ->setPaper('A4', 'portrait');

        return $pdf->download("Label-Rak-{$rak}.pdf");
    }
}
