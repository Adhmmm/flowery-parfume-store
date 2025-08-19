<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use App\Models\Kriteria;
use App\Models\NilaiKriteria;
use App\Models\HasilSaw;
use Illuminate\Http\Request;

class HasilController extends Controller
{
    public function index()
    {
        $kriterias = Kriteria::all();
        $produks = Produk::all();
        $nilaiKriterias = NilaiKriteria::all();

        $normalisasi = [];
        $hasil = [];

        foreach ($kriterias as $kriteria) {
            $nilaiKriteria = $nilaiKriterias->where('kriteria_id', $kriteria->id)->pluck('nilai');
            $max[$kriteria->id] = $nilaiKriteria->max();
            $min[$kriteria->id] = $nilaiKriteria->min();
        }

        foreach ($produks as $produk) {
            $skorTotal = 0;
            foreach ($kriterias as $kriteria) {
                $nilaiProduk = $nilaiKriterias
                    ->where('produk_id', $produk->id)
                    ->where('kriteria_id', $kriteria->id)
                    ->first()->nilai ?? 0;

                if ($kriteria->tipe_kriteria == 'benefit') {
                    $norm = ($max[$kriteria->id] > 0) ? $nilaiProduk / $max[$kriteria->id] : 0;
                } else {
                    $norm = ($nilaiProduk > 0) ? $min[$kriteria->id] / $nilaiProduk : 0;
                }

                $normalisasi[$produk->id][$kriteria->id] = $norm;
                $skorTotal += $norm * $kriteria->bobot;
            }

            $hasil[] = (object)[
                'produk' => $produk,
                'produk_id' => $produk->id,
                'skor_total' => $skorTotal
            ];
        }

        usort($hasil, function ($a, $b) {
            return $b->skor_total <=> $a->skor_total;
        });

        foreach ($hasil as $index => $item) {
            HasilSaw::updateOrCreate(
                ['produk_id' => $item->produk_id],
                [
                    'skor' => $item->skor_total,
                    'rank' => $index + 1
                ]
            );
        }

        $hasilSaw = HasilSaw::with('produk')->orderByDesc('skor')->get();

        return view('admin.hasil.index', compact('kriterias', 'normalisasi', 'hasilSaw'));
    }
}
