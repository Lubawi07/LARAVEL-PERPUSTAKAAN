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
                                <label for="gambar">Cover Buku</label>
                                <input type="file" name="gambar" id="gambar" class="form-control">
                            </div>
                            @error('gambar')
                            <div class="alert alert-danger" role="alert">
                              {{ $message }}
                            </div>
                            @enderror
                              <div class="form-group">
                                <label for="kode">Kode</label>
                                <input type="text" name="kode" id="kode" class="form-control" value="{{ $buku->kode }}">
                            </div>
                            @error('kode')
                              <div class="alert alert-danger" role="alert">
                                {{ $message }}
                              </div>
                              @enderror
                            <div class="form-group">
                                <label for="judul">Judul</label>
                                <input type="text" name="judul" id="judul" class="form-control" value="{{ $buku->judul }}">
                            </div>
                            @error('judul')
                              <div class="alert alert-danger" role="alert">
                                {{ $message }}
                              </div>
                              @enderror
                              <div class="form-group">
                                <label for="kategori_id">Kategori</label>
                                <select class="form-control" id="selectOption" name="kategori_id" id="kategori_id">
                                  <option value="">--Isi Kategorinya--</option>
                                  @foreach ($kategori as $item)
                                  <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                  @endforeach
                                </select>
                            </div>
                            @error('kategori_id')
                              <div class="alert alert-danger" role="alert">
                                {{ $message }}
                              </div>
                              @enderror
                            <div class="form-group">
                                <label for="penerbit">Penerbit</label>
                                <input type="text" name="penerbit" id="penerbit" class="form-control" value="{{ $buku->penerbit }}">
                            </div>
                            @error('penerbit')
                              <div class="alert alert-danger" role="alert">
                                {{ $message }}
                              </div>
                              @enderror
                            <div class="form-group">
                                <label for="isbn">ISBN</label>
                                <input type="text" name="isbn" id="isbn" class="form-control" value="{{ $buku->isbn }}">
                            </div>
                            @error('isbn')
                              <div class="alert alert-danger" role="alert">
                                {{ $message }}
                              </div>
                              @enderror
                            <div class="form-group">
                                <label for="pengarang">Pengarang</label>
                                <input type="text" name="pengarang" id="pengarang" class="form-control" value="{{ $buku->pengarang }}">
                            </div>
                            @error('pengarang')
                              <div class="alert alert-danger" role="alert">
                                {{ $message }}
                              </div>
                              @enderror
                            <div class="form-group">
                                <label for="jumlah_halaman">Jumlah_Halaman</label>
                                <input type="number" name="jumlah_halaman" id="jumlah_halaman" class="form-control" value="{{ $buku->jumlah_halaman }}">
                            </div>
                            @error('jumlah_halaman')
                              <div class="alert alert-danger" role="alert">
                                {{ $message }}
                              </div>
                              @enderror
                            <div class="form-group">
                                <label for="tahun_terbit">Tahun_Terbit</label>
                                <input type="number" name="tahun_terbit" id="tahun_terbit" class="form-control" value="{{ $buku->tahun_terbit }}">
                            </div>
                            @error('tahun_terbit')
                              <div class="alert alert-danger" role="alert">
                                {{ $message }}
                              </div>
                              @enderror
                            <div class="form-group">
                                <label for="sinopsis">Sinopsis</label>
                                <input type="text" name="sinopsis" id="sinopsis" class="form-control" value="{{ $buku->sinopsis }}">
                            </div>
                            @error('sinopsis')
                              <div class="alert alert-danger" role="alert">
                                {{ $message }}
                              </div>
                              @enderror
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
