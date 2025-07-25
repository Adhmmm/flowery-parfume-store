<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produk;

class LandingController extends Controller
{
    public function home()
    {
        $produk = Produk::latest()->take(6)->get();
        return view('landing.home', compact('produk'));
    }

    public function produk()
    {
        $produk = Produk::paginate(12);
        return view('landing.produk', compact('produk'));
    }

    public function about()
    {
        return view('landing.about');
    }

    public function contact()
    {
        return view('landing.contact');
    }
}
