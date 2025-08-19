<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index(Request $request) {
        // ambil filter kategori dari request (checkbox)
        $filterJenis = $request->input('jenis_aroma', []);

        $query = Produk::select('produks.*', 'hasil_saw.skor', 'hasil_saw.rank')
        ->join('hasil_saw', 'hasil_saw.produk_id', '=', 'produks.id')
        ->orderBy('hasil_saw.rank', 'asc');
 
        // Jika ada filter jenis_aroma
        if (!empty($filterJenis)) {
            $query->whereIn('produks.jenis_aroma', $filterJenis);
        }
 
        $produk = $query->get();
 
        return view('customer.catalog', ['produk' => $produk, 'jenis_aroma' => $filterJenis]);
    }
}