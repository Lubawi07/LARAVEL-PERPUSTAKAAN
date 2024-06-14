@extends('layouts.layout')

@section('tittle', 'kategori')

@section('content')
    <!-- Main Content -->
    <div id="content">
        {{-- Topbar --}}
        <!-- Begin Page Content -->
        <div class="container-fluid">
            {{-- alert jika data berhasil dihapus --}}
            @if (session('message-delete'))
            <div class="alert alert-success" role="alert">
                {{ session('message-delete') }}
              </div>
            @endif

            {{-- alert jika data berhasil diubah --}}
            @if (session('message-update'))
            <div class="alert alert-success" role="alert">
                {{ session('message-update') }}
              </div>
            @endif

            {{-- alert jika data berhasil ditambahkan --}}
            @if (session('message-success'))
            <div class="alert alert-success" role="alert">
                {{ session('message-success') }}
              </div>
            @endif
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Data Kategori</h1>
                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
            </div>
            <p class="mb-4">Digunakan untuk mengelola data kategori</p>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Data Kategori</h6>
                </div>
                <div class="card-body">
                    <button class="btn btn-sm btn-success mb-4" type="button" data-target="#modal-tambah" data-toggle="modal">
                        <i class="fas fa-solid fa-plus"></i>
                        Tambah Data
                    </button>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead class="thead-dark">
                                <tr class="text-center">
                                    <th style="width: 10%" >No</th>
                                    <th>Kode</th>
                                    <th>Nama</th>
                                    <th>Dibuat</th>
                                    <th>Diupdate</th>
                                    <th style="width: 20%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kategori as $item )
                                <tr>
                                    {{-- seharusnya sih pakai $item->id biar datanya sama cuman ngk pp --}}
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->kode }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>{{ $item->updated_at }}</td>
                                    <td>
                                        <form action="/kategori/{{ $item->id }}" method="GET">
                                            @method('delete')
                                            <a href="/kategori/{{ $item->id }}/edit" class="btn btn-warning">
                                                <i class=" fas fa-solid fa-pen"></i>
                                                Edit</a>
                                            <button class="btn btn-danger" type="submit">
                                                <i class="fas fa-solid fa-trash"></i>
                                                Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
            {{-- isi contentnya --}}

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
    @include('kategori.form')
    @stack('scripts')
@endsection
