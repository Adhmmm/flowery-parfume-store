<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produk;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    public function index()
    {
        $produks = Produk::latest()->paginate(10);
        return view('admin.produk.index', compact('produks'));
    }

    public function create()
    {
        return view('admin.produk.create');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama' => 'required',
            'sku' => 'required',
            'kategori' => 'required',
            'stok' => 'required|integer',
            'harga' => 'required|integer|min:10000',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png',
        ]);

        if ($request->hasFile('gambar')) {
            $validate['gambar'] = $request->file('gambar')->store('produk', 'public');
        }

        Produk::create($validate);
        return redirect()->route('admin.produk.index')->with('success', 'Produk berhasil ditambahkan.');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $produk = Produk::findOrFail($id);
        return view('admin.produk.edit', compact('produk'));
    }

    public function update(Request $request, Produk $produk)
    {
        $validate = $request->validate([
            'nama' => 'required',
            'sku' => 'required',
            'kategori' => 'required',
            'stok' => 'required|integer',
            'harga' => 'required|integer',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png',
        ]);

        if ($request->hasFile('gambar')) {
            if ($produk->gambar) Storage::delete('public/' . $produk->gambar);
            $validate['gambar'] = $request->file('gambar')->store('produk', 'public');
        }

        $produk->update($validate);

        return redirect()->route('admin.produk.index')->with('success', 'Produk berhasil diupdate.');
    }

    public function destroy(Produk $produk)
    {
        if ($produk->gambar) Storage::delete('public/' . $produk->gambar);
        $produk->delete();
        return redirect()->route('admin.produk.index')->with('success', 'Produk berhasil dihapus.');
    }
}