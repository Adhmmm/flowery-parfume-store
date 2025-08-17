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
    public function hitungSAW()
    {
        $kriterias = Kriteria::all();
        $produks = Produk::all();

        $nilaiMatrix = [];
        foreach ($produks as $produk) {
            foreach ($kriterias as $kriteria) {
                $nilai = NilaiKriteria::where('produk_id', $produk->produk_id)
                    ->where('kriteria_id', $kriteria->kriteria_id)
                    ->value('nilai');
                $nilaiMatrix[$produk->produk_id][$kriteria->kriteria_id] = $nilai ?? 0;
            }
        }

        $normalisasi = [];
        foreach ($kriterias as $k) {
            $kolomNilai = array_column(array_map(function ($row) use ($k) {
                return $row[$k->kriteria_id];
            }, $nilaiMatrix), null);

            $max = max($kolomNilai);
            $min = min($kolomNilai);

            foreach ($produks as $produk) {
                if ($k->tipe_kriteria == 'benefit') {
                    $normalisasi[$produk->produk_id][$k->kriteria_id] = $nilaiMatrix[$produk->produk_id][$k->kriteria_id] / $max;
                } else {
                    $normalisasi[$produk->produk_id][$k->kriteria_id] = $min / $nilaiMatrix[$produk->produk_id][$k->kriteria_id];
                }
            }
        }

        $hasil = [];
        foreach ($produks as $produk) {
            $skor = 0;
            foreach ($kriterias as $kriteria) {
                $skor += $normalisasi[$produk->produk_id][$kriteria->kriteria_id] * $kriteria->bobot;
            }
            $hasil[$produk->produk_id] = $skor;
        }

        HasilSaw::truncate();
        arsort($hasil,);
        $rank = 1;
        foreach ($hasil as $produkId => $skor) {
            HasilSaw::create([
                'produk_id' => $produkId,
                'skor' => $skor,
                'rank' => $rank++
            ]);
        }

        return redirect()->back()->with('success', 'Perhitungan SAW berhasil dilakukan.');
    }

    public function hasil()
    {
        $hasil = HasilSaw::with('produks')->orderBy('rank')->get();
        return view('admin.hasil.index', compact('hasil'));
    }
}
