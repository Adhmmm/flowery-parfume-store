<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produk;
use Illuminate\Support\Facades\Storage;
use Throwable;

class ProdukController extends Controller
{
    public function index()
    {
        $produks = Produk::latest()->paginate(5);
        return view('admin.produk.index', compact('produks'));
    }

    public function create()
    {
        return view('admin.produk.create');
    }

    public function store(Request $request)
    {
        try {
            $validate = $request->validate([
                'nama' => 'required',
                'jenis_aroma' => 'required',
                'rating_produk' => 'required|numeric|min:0|max:5',
                'penjualan' => 'required|integer|min:0',
                'harga' => 'required|integer|min:0',
                'gambar' => 'nullable|image|mimes:jpg,jpeg,png',
            ]);

            if (is_string($validate['rating_produk'])) {
                $validate['rating_produk'] = str_replace(',', '.', $validate['rating_produk']);
            }

            if ($request->hasFile('gambar')) {
                $validate['gambar'] = $request->file('gambar')->store('produk', 'public');
            }


            Produk::create($validate);

            return redirect()->route('produk.index')->with('success', 'Produk berhasil ditambahkan.');
        } catch (Throwable $e) {
            return redirect()->route('produk.index')->with('error', $e || 'Produk gagal ditambahkan.',);
        }
    }

    public function show(string $id)
    {
        $produk = Produk::findOrFail($id);
        return view('produk.show', compact('produk'));
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
            'jenis_aroma' => 'required',
            'rating_produk' => 'required|numeric|min:0|max:5',
            'penjualan' => 'required|integer|min:0',
            'harga' => 'required|integer|min:0',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png',
        ]);

        if (is_string($validate['rating_produk'])) {
            $validate['rating_produk'] = str_replace(',', '.', $validate['rating_produk']);
        }

        if ($request->hasFile('gambar')) {

            if ($produk->gambar && Storage::disk('public')->exists($produk->gambar)) {
                Storage::disk('public')->delete($produk->gambar);
            }
            $validate['gambar'] = $request->file('gambar')->store('produk', 'public');
        }

        $produk->update($validate);

        return redirect()->route('produk.index')->with('success', 'Produk berhasil diupdate.');
    }

    public function destroy(Produk $produk)
    {
        if ($produk->gambar) Storage::delete('public/' . $produk->gambar);
        $produk->delete();
        return redirect()->route('produk.index')->with('success', 'Produk berhasil dihapus.');
    }
}
