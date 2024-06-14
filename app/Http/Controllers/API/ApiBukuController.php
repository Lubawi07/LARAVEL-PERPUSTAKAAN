<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiBukuController extends Controller
{
    public function index()
    {
        $buku = \App\Models\Buku::all();
        return response()->json($buku);
    }

    public function details($id){
        $buku = \App\Models\Buku::find($id);
        return response()->json($buku);
    }

    public function kategori(){
        $kategori = \App\Models\Kategori::all();
        return \response()->json($kategori);
    }
}
