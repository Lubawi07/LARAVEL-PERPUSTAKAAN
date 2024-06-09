<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        // variabel $kategori akan memanggil model kategori dalam artian jika modelnya belum ada isinya maka akan terjadi eror
        $kategori = \App\Models\Kategori::all();
        // dd ini digunakan untuk mengecek isi dari tabel yang terisi untuk memastikan datanya ada didalam database
        // dd($kategori->all());
        // compact digunakan untuk mengirim data ke tampilan blade
        return view("kategori.index", compact("kategori"));
        // return response()->json([$kategori]);
    }


    public function store(Request $request)
    {
        // dd($request->all());
        // validasi data
        \App\Models\Kategori::create($request->validate(
            [
                'kode' => 'required',
                'nama' => 'required',
            ],[
                'kode.required' => 'Isi kode terlebih dahulu',
                'nama.required' => 'Isi nama terlebih dahulu ',
            ]
        ));

        // kenapa namanya "kategori" ? karena "kategori" ini berasal dari web.php yang berfungsi untuk menentukan route pada sebuah web
        session()->flash("message-success","Data berhasil ditambah");

        return redirect("kategori");
    }

    public function edit($id)
    {
        $kategori = \App\Models\Kategori::find($id);

        return view("kategori.edit", compact("kategori"));
    }

    public function update(Request $request, $id)
    {
        $kategori = \App\Models\Kategori::find($id);
        $kategori->kode = $request->kode;
        $kategori->nama = $request->nama;
        $kategori->update();

        session()->flash("message-update","Data berhasil diupdate");
        return redirect("kategori");
    }

    public function destroy($id)
    {
        $kategori = \App\Models\Kategori::find($id);
        $kategori->delete();

        session()->flash("message-delete","Data berhasil dihapus");
        return redirect("kategori");
    }


}
