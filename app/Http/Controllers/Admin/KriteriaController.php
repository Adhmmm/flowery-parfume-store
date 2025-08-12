<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kriteria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kriteria = Kriteria::all();
        return view('admin.kriteria.index', compact('kriteria'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.kriteria.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Kriteria::create($request->validate([
            'nama_kriteria' => 'required|string|max:50',
            'bobot' => 'required|numeric|min:0|max:1',
            'tipe_kriteria' => 'required|in:benefit,cost'
        ]));

        return redirect()->route('admin.kriteria.index')->with('success', 'Kriteria berhasil disimpan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kriteria = Kriteria::findOrFail($id);
        return view('admin.kriteria.edit', compact('kriteria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $kriteria = Kriteria::findOrFail($id);
        $kriteria->update($request->validate([
            'nama_kriteria' => 'required|string|max:50',
            'bobot' => 'required|numeric|min:0|max:1',
            'tipe_kriteria' => 'required|in:benefit,cost'
        ]));
        return redirect()->route('admin.kriteria.index')->with('success', 'Data Kriteria berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Kriteria::destroy($id);
        return redirect()->route('admin.kriteria.index')->with('success', 'Data Kriteria berhasil dihapus');
    }
}
