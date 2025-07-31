<?php

namespace App\Http\Controllers\Customer;

use App\Models\Produk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
    public function home()
    {
        $produk = Produk::latest()->take(6)->get();
        return view('customer.home', compact('produk'));
    }

    public function produk()
    {
        $produk = Produk::paginate(12);
        return view('customer.produk', compact('produk'));
    }

    public function about()
    {
        return view('customer.about');
    }

    public function catalog()
    {
        return view('customer.catalog');
    }

    public function contact()
    {
        return view('customer.contact');
    }
}