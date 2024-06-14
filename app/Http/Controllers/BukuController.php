<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    // untuk melihat (meread data yang ada di database)
    public function index()
    {
        $kategori = Kategori::all();
        $buku = \App\Models\Buku::all();
        return view("buku.books", compact("buku"));
    }


    // untuk menambahkan data ke dalam database
    public function add()
    {
        $kategori = \App\Models\Kategori::all();
        return view("buku.tambahbuku", compact("kategori"));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $buku = Buku::create($request->validate(
            [
                "gambar" => "required",
                "kode" => "required",
                "judul" => "required",
                "kategori_id" => "required",
                "penerbit" => "required",
                "isbn" => "required",
                "pengarang" => "required",
                "jumlah_halaman" => "required",
                "tahun_terbit" => "required",
                "sinopsis" => "required",
            ],[
                "gambar.required"=> "Isi gambarnya",
                "kode.required"=> "Isi kode nya",
                "judul.required"=> "Isi judulnya",
                "kategori_id.required"=> "Isi kategorinya",
                "penerbit.required"=> "Isi penerbitnya",
                "isbn"=> "Isi ISBN (Optional)",
                "pengarang"=> "Isi pengarangnya",
                "jumlah_halaman.required"=> "Isi jumlahnya",
                "tahun_terbit.required"=> "Isi tahun terbitnya",
                "sinopsis.required"=> "Isi sinopsisnya",
            ]
        ));

        // Untuk menambahkan gambar
        if($request->hasFile("gambar")){
            $request->file("gambar")->move("bukuperpus/", $request->file("gambar")->getClientOriginalName());
            $buku->gambar = $request->file('gambar')->getClientOriginalName();
            $buku->save();
        }
        session()->flash("success","Data berhasil ditambah");
        return redirect("buku");
    }

    public function edit($id)
    {
        $buku = \App\Models\Buku::find($id);
        $kategori = \App\Models\Kategori::all();
        return view("buku.editbuku", compact("buku", "kategori"));
    }

    public function update(Request $request, $id)
    {
        $buku = \App\Models\Buku::find($id);
        $buku->gambar = $request->gambar;
        $buku->kode = $request->kode;
        $buku->judul = $request->judul;
        $buku->kategori_id = $request->kategori_id;
        $buku->penerbit = $request->penerbit;
        $buku->isbn = $request->isbn;
        $buku->pengarang = $request->pengarang;
        $buku->jumlah_halaman = $request->jumlah_halaman;
        $buku->tahun_terbit = $request->tahun_terbit;
        $buku->sinopsis = $request->sinopsis;
        $buku->update($request->validate(
            [
                "gambar"=> "required",
                "kode" => "required",
                "judul" => "required",
                "kategori_id" => "required",
                "penerbit" => "required",
                "isbn" => "required",
                "pengarang" => "required",
                "jumlah_halaman" => "required",
                "tahun_terbit" => "required",
                "sinopsis" => "required",
            ],[
                "gambar.required"=> "Isi gambarnya",
                "kode.required"=> "Isi kode nya",
                "judul.required"=> "Isi judulnya",
                "kategori_id.required"=> "Isi kategorinya",
                "penerbit.required"=> "Isi penerbitnya",
                "isbn"=> "Isi ISBN (Optional)",
                "pengarang"=> "Isi pengarangnya",
                "jumlah_halaman.required"=> "Isi jumlahnya",
                "tahun_terbit.required"=> "Isi tahun terbitnya",
                "sinopsis.required"=> "Isi sinopsisnya",
            ]
        ));

        session()->flash("update","Data berhasil diupdate");
        // dd($buku);
        return redirect("buku");
        // return response()->json();
    }

    public function destroy($id)
    {
        $buku = \App\Models\Buku::find($id);
        $buku->delete();
        session()->flash("delete","Data berhasil dihapus");
        return redirect("buku");
    }

    // Untuk menampilkan data buku di user
    public function showbuku()
    {
        // Yang bagian ini benar
        // Buat ngambil data dari tabel kategori
        $kategori = Kategori::all();
        $buku = \App\Models\Buku::all();
        return view ("user.layoutbuku", compact("kategori","buku"));
    }

    public function detailbuku($id)
    {
        $buku = \App\Models\Buku::find($id);
        return view ("user.detailbuku", compact("buku"));
    }
}
