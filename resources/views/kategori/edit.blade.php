@extends('layouts.layout')

@section('tittle', 'Edit Data Kategori')

@section('content')
    <!-- Main Content -->
<div id="content">
    {{-- Topbar --}}

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Data Kategori</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
        </div>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Data</h6>
            </div>
            <div class="modal-body">
                <form action="/kategori/{{ $kategori->id }}" method="POST">
                  @csrf
                  {{-- kenapa namanya harus 'put' ? karena jika kita menuliskan methodnya berbeda dari standar backendnya apalagi saat ingin
                        menulisnya dalam web.php itu akan berlawanan
                  --}}
                  @method('put')
                  <div class="form-group">
                      <label for="kode">Kode</label>
                      <input type="text" name="kode" id="kode" class="form-control" value="{{ $kategori->kode }}">
                  </div>
                  <div class="form-group">
                      <label for="nama">Nama</label>
                      <input type="text" name="nama" id="nama" class="form-control" value="{{ $kategori->nama }}">
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-warning" type="submit">
                        <i class="fas fa-save"></i>
                        Simpan</button>
                  </div>
              </form>
              </div>
        </div>
        {{-- isi contentnya --}}

    </div>
    <!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
@endsection




