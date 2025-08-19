<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'jenis_aroma',
        'rating_produk',
        'penjualan',
        'harga',
        'gambar'
    ];

    public function NilaiKriteria()
    {
        return $this->hasMany(NilaiKriteria::class, 'produk_id', 'id');
    }

    public function HasilSaw()
    {
        return $this->hasOne(HasilSaw::class, 'produk_id', 'id');
    }
}
