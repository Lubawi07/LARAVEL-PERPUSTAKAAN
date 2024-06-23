@extends('layouts.layout')
@section('tittle', 'Edit Data Admin')

@section('content')
    <!-- Main Content -->
            <div id="content">
                {{-- Topbar --}}

                <!-- Begin Page Content -->
            <div class="container-fluid">
                    <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Edit Data Admin</h1>
                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
            </div>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Edit Data</h6>
                </div>
                <div class="modal-body">
                    <form action="/data/admin/{{ $data_user->id }}" method="POST">
                    @csrf
                    {{-- kenapa namanya harus 'put' ? karena jika kita menuliskan methodnya berbeda dari standar backendnya apalagi saat ingin
                            menulisnya dalam web.php itu akan berlawanan
                    --}}
                    @method('put')
                  <div class="form-group">
                      <label for="name">Nama</label>
                      <input type="text" name="name" id="name" class="form-control" value="{{ $data_user->name }}">
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
