<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    // model pada laravel berfungsi untuk mengamankan table dan untuk memanggil tabel atau field 
    protected $table = "category";

    // apa yang harus diisi pada form kategori
    protected $fillable = ['kode', 'nama'];
}
