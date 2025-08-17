<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    use HasFactory;

    protected $table = 'kriterias';

    protected $fillable = [
        'nama_kriteria',
        'bobot',
        'tipe_kriteria'
    ];

    public function nilaiKriteria()
    {
        return $this->hasMany(NilaiKriteria::class, 'kriteria_id', 'id');
    }
}
