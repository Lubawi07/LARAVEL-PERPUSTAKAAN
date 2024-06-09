<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $table = "buku";

    protected $fillable = [
        "kode",
        "judul",
        "kategori_id",
        "penerbit",
        "isbn",
        "pengarang",
        "jumlah_halaman",
        "tahun_terbit",
        "sinopsis",
        // "gambar"
    ];

    public function bukus()
    {
        return $this->belongsTo(Kategori::class);
    }

}
