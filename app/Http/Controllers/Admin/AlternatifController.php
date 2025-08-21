<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use App\Models\Kriteria;
use App\Models\NilaiKriteria;
use Illuminate\Http\Request;

class AlternatifController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produks = Produk::all();
        $kriterias = Kriteria::all();
        $nilaiKriterias = NilaiKriteria::with(['produk', 'kriteria'])->get();

        $data = [];
        foreach ($produks as $produk) {
            foreach ($kriterias as $kriteria) {
                $nilai = $nilaiKriterias
                    ->where('produk_id', $produk->id)
                    ->where('kriteria_id', $kriteria->id)
                    ->first();

                $data[$produk->id][$kriteria->id] = $nilai ? $nilai->nilai : '-';
            }
        }
        return view('admin.alternatif.index', compact('kriterias', 'produks', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $produks = Produk::all();
        $kriterias = Kriteria::all();
        return view('admin.alternatif.create', compact('produks', 'kriterias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'produk_id' => 'required',
            'kriteria_id' => 'required',
            'nilai' => 'required|numeric|min:0'
        ]);

        NilaiKriteria::create($request->all());

        return redirect()->route('alternatif.index')->with('success', 'Nilai Kriteria berhasil ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($produk_id)
    {
        $nilaiKriterias = NilaiKriteria::where('produk_id', $produk_id)->get()->keyBy('kriteria_id');
        $produks = Produk::findOrFail($produk_id);
        $kriterias = Kriteria::all();

        return view('admin.alternatif.edit', compact('produks', 'kriterias', 'nilaiKriterias'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $produk_id)
    {
        foreach ($request->nilai as $kriteria_id => $nilaiKriterias) {
            NilaiKriteria::updateOrCreate(
                [
                    'produk_id' => $produk_id,
                    'kriteria_id' => $kriteria_id,
                ],
                [
                    'nilai' => $nilaiKriterias
                ]
            );
        }
        return redirect()->route('alternatif.index')->with('success', 'Nilai Kriteria berhasil diperbarui');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $nilaiKriterias = NilaiKriteria::findOrFail($id);
        $nilaiKriterias->delete();

        return redirect()->route('alternatif.index')->with('success', 'Nilai Kriteria berhasil dihapus');
    }
}
