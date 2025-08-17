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
        $nilai = NilaiKriteria::with(['produk', 'kriteria'])->get();
        return view('admin.alternatif.index', compact('nilai'));
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
    public function edit($id)
    {
        $nilai = NilaiKriteria::findOrFail($id);
        $produks = Produk::all();
        $kriterias = Kriteria::all();
        return view('admin.alternatif.edit', compact('nilai', 'produks', 'kriterias'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'produk_id' => 'required',
            'kriteria_id' => 'required',
            'nilai' => 'required|numeric|min:0'
        ]);

        $nilai = NilaiKriteria::findOrFail($id);
        $nilai->update($request->all());

        return redirect()->route('alternatif.index')->with('success', 'Nilai Kriteria berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $nilai = NilaiKriteria::findOrFail($id);
        $nilai->delete();

        return redirect()->route('alternatif.index')->with('success', 'Nilai Kriteria berhasil dihapus');
    }
}
