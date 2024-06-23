<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PeminjamanController extends Controller
{
    public function index()
    {
        // yang ini buat nampilin berdasarkan user yang pinjam buku jadi kalo nama nya lubawi doang atau user yang lain tanpa bisa melihat semua data karena kode ini
        // $peminjaman = auth()->user()->peminjaman;
        // tapi yang ini bisa mengambil semua data peminjaman datanya jadi keliatan user siapa saja yang pinjam buku
        $peminjaman = Peminjaman::all();
        // dd(Peminjaman::with('buku')->get());
        return view("request.peminjaman", ['peminjaman' =>$peminjaman]);
    }

    public function store(Request $request)
    {

        // dd($request->all());

        $pinjam = auth()->user()->peminjaman()->create(['book_id' =>$request->book_id]);
        if($pinjam){
            session()->flash('sukses-pinjam','Berhasil meminjam buku');
            return redirect('perpus/buku');
        }else{
            session()->flash('gagal-pinjam', 'Gagal meminjam buku');
            return redirect('perpus/buku');
        }
    }


    public function delete($id)
    {
        $pinjam = Peminjaman::find($id);
        $pinjam->delete();

        session()->flash('message-delete','Data berhasil dihapus');
        return redirect('peminjaman');
    }

}

