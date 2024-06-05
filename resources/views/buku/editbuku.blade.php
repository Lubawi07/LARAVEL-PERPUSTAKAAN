@extends('layouts.layout')

@section('tittle', 'Edit Buku')
@section('content')
    <!-- Main Content -->
            <div id="content">
                {{-- Topbar --}}

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    {{-- isi kontennya --}}
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Edit Data Buku</h1>
                    </div>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Edit Data</h6>
                        </div>
                        <div class="modal-body">
                            <form action="/buku/{{ $buku->id }}" method="POST">
                              @csrf
                              @method('put')
                              <div class="form-group">
                                <label for="kode">Kode</label>
                                <input type="text" name="kode" id="kode" class="form-control" value="{{ $buku->kode }}">
                            </div>
                            <div class="form-group">
                                <label for="judul">Judul</label>
                                <input type="text" name="judul" id="judul" class="form-control" value="{{ $buku->judul }}">
                            </div>
                            <div class="form-group">
                                <label for="kategori_id">Kategori_id</label>
                                <input type="number" name="kategori_id" id="kategori_id" class="form-control" value="{{ $buku->kategori_id }}">
                            </div>
                            <div class="form-group">
                                <label for="penerbit_id">Penerbit_id</label>
                                <input type="number" name="penerbit_id" id="penerbit_id" class="form-control" value="{{ $buku->penerbit_id }}">
                            </div>
                            <div class="form-group">
                                <label for="isbn">ISBN</label>
                                <input type="text" name="isbn" id="isbn" class="form-control" value="{{ $buku->isbn }}">
                            </div>
                            <div class="form-group">
                                <label for="pengarang">Pengarang</label>
                                <input type="text" name="pengarang" id="pengarang" class="form-control" value="{{ $buku->pengarang }}">
                            </div>
                            <div class="form-group">
                                <label for="jumlah_halaman">Jumlah_halaman</label>
                                <input type="number" name="jumlah_halaman" id="jumlah_halaman" class="form-control" value="{{ $buku->jumlah_halaman }}">
                            </div>
                            <div class="form-group">
                                <label for="jumlah_halaman">Stok</label>
                                <input type="number" name="stok" id="stok" class="form-control" value="{{ $buku->stok }}">
                            </div>
                            <div class="form-group">
                                <label for="tahun_terbit">Tahun_terbit</label>
                                <input type="number" name="tahun_terbit" id="tahun_terbit" class="form-control" value="{{ $buku->tahun_terbit }}">
                            </div>
                            <div class="form-group">
                                <label for="sinopsis">Sinopsis</label>
                                <input type="text" name="sinopsis" id="sinopsis" class="form-control" value="{{ $buku->sinopsis }}">
                            </div>
                            <div class="form-group">
                                <label for="gambar">Gambar</label>
                                <input type="file" name="gambar" id="gambar" class="form-control" value="{{ $buku->gambar }}">
                            </div>
                              <div class="modal-footer">
                                <button class="btn btn-warning" type="submit">
                                    <i class="fas fa-save"></i>
                                    Simpan</button>
                              </div>
                          </form>
                          </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
@endsection
