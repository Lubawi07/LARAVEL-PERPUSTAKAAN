<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    // untuk melihat (meread data yang ada di database)
    public function index()
    {
        $buku = \App\Models\Buku::all();
        return view("buku.books", compact("buku"));
    }

    // untuk menambahkan data ke dalam database
    public function add()
    {
        return view("buku.tambahbuku");
    }

    public function store(Request $request)
    {
        // dd($request->all());
        \App\Models\Buku::create($request->validate(
            [
                "kode" => "required",
                "judul" => "required",
                "kategori_id" => "required",
                "penerbit_id" => "required",
                "isbn" => "required",
                "pengarang" => "required",
                "jumlah_halaman" => "required",
                "stok" => "required",
                "tahun_terbit" => "required",
                "sinopsis" => "required",
                "gambar"=> "required|image|mimes:jpeg,png,jpg|max:2048",
            ],[
                "kode.required"=> "Isi kode nya",
                "judul.required"=> "Isi namanya",
                "kategori_id.required"=> "Isi kategorinya",
                "penerbit_id.required"=> "Isi penerbitnya",
                "isbn"=> "Isi ISBN (Optional)",
                "pengarang"=> "Isi pengarangnya",
                "jumlah_halaman.required"=> "Isi jumlahnya",
                "stok.required"=> "Isi stoknya",
                "tahun_terbit.required"=> "Isi tahun terbitnya",
                "sinopsis.required"=> "Isi sinopsisnya",
                "gambar.required"=> "Isi gambarnya",
                "gambar.image"=>"File harus bertipe gambar",
                "gambar.mimes" => "Format gambar harus jpeg, png, dan jpg",
                "gambar.max"  => "Ukuran maksimal 2 MB",
            ]
        ));


        if ($request->hasFile('gambar'))
        {
            $imagePath  = $request->file('gambar')->store('images', 'public');
            $validatedData['gambar'] = $imagePath;
        }

        \App\Models\Buku::create($validatedData);

        session()->flash("success","Data berhasil ditambah");
        return redirect("buku");
    }

    public function edit($id)
    {
        $buku = \App\Models\Buku::find($id);
        return view("buku.editbuku", compact("buku"));
    }

    public function update(Request $request, $id)
    {
        $buku = \App\Models\Buku::find($id);
        $buku->kode = $request->kode;
        $buku->judul = $request->judul;
        $buku->kategori_id = $request->kategori_id;
        $buku->penerbit_id = $request->penerbit_id;
        $buku->isbn = $request->isbn;
        $buku->pengarang = $request->pengarang;
        $buku->jumlah_halaman = $request->jumlah_halaman;
        $buku->stok = $request->stok;
        $buku->tahun_terbit = $request->tahun_terbit;
        $buku->sinopsis = $request->sinopsis;
        $buku->gambar = $request->gambar;
        $buku->update();
        session()->flash("update","Data berhasil diupdate");
        // dd($buku);
        return redirect("buku");
    }

    public function destroy($id)
    {
        $buku = \App\Models\Buku::find($id);
        $buku->delete();
        session()->flash("delete","Data berhasil dihapus");
        return redirect("buku");
    }

}
