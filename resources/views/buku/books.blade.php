@extends('layouts.layout')

@section('tittle', 'Buku')

@section('content')
<!-- Main Content -->
            <div id="content">
                {{-- Topbar --}}

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    {{-- alert jika data berhasil dihapus --}}
                    @if (session('delete'))
                    <div class="alert alert-success" role="alert">
                        {{ session('delete') }}
                    </div>
                    @endif

                    {{-- alert jika data berhasil diubah --}}
                    @if (session('update'))
                    <div class="alert alert-success" role="alert">
                        {{ session('update') }}
                    </div>
                    @endif

                    {{-- alert jika data berhasil ditambahkan --}}
                    @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                    @endif
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Buku</h1>
                    <p class="mb-4">Digunakan untuk mengelola data buku</p>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Buku</h6>
                        </div>
                        <div class="card-body">
                            <a href="/buku/tambah-data" class="btn btn-sm btn-success mb-4">
                                <i class="fas fa-solid fa-plus"></i>
                                Tambah Buku
                            </a>
                            <div class="table-responsive" >
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead class="thead-dark" style="width: 10%">
                                        <tr>
                                            <th>No</th>
                                            <th>Gambar</th>
                                            <th>Kode</th>
                                            <th>Judul</th>
                                            <th>Kategori</th>
                                            <th>Penerbit</th>
                                            <th>ISBN</th>
                                            <th>Pengarang</th>
                                            <th>Jumlah_Halaman</th>
                                            <th>Tahun_Terbit</th>
                                            <th>Sinopsis</th>
                                            <th>Dibuat</th>
                                            <th>Diupdate</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($buku as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td> <img src="{{ asset('bukuperpus/' . $item->gambar) }}" alt="Gambar Buku" style="max-width: 100px;"></td>
                                        <td>{{ $item->kode }}</td>
                                        <td>{{ $item->judul }}</td>
                                        <td>{{ $item->kategori_id }}</td>
                                        <td>{{ $item->penerbit}}</td>
                                        <td>{{ $item->isbn }}</td>
                                        <td>{{ $item->pengarang }}</td>
                                        <td>{{ $item->jumlah_halaman }}</td>
                                        <td>{{ $item->tahun_terbit }}</td>
                                        <td>{{ $item->sinopsis }}</td>
                                        <td>{{ $item->created_at }}</td>
                                        <td>{{ $item->updated_at }}</td>
                                        <td>
                                            <form action="/buku/{{ $item->id }}" method="GET">
                                                @method('delete')
                                            <div class="btn-group">
                                                <a href="/buku/{{ $item->id }}/edit"  class="btn btn-warning mr-3">
                                                    <i class=" fas fa-solid fa-pen"></i>
                                                    Edit
                                                </a>
                                                <button class="btn btn-danger">
                                                    <i class="fas fa-solid fa-trash"></i>
                                                    Hapus
                                                </button>
                                            </div>
                                            </form>
                                            </td>

                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
@endsection
