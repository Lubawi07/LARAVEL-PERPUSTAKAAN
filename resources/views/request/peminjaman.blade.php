@extends('layouts.layout')

@section('tittle', 'Peminjaman')

@section('content')
    <!-- Main Content -->
            <div id="content">
                {{-- Topbar --}}
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Peminjaman</h1>
                    <p class="mb-4">Data untuk mengelola peminjaman</p>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Peminjaman</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead class="thead-dark">
                                        <tr class="text-center">
                                            <th>Id</th>
                                            <th>Dipinjam oleh:</th>
                                            <th>Buku :</th>
                                            <th>Dipinjam : </th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($peminjaman as $pinjam)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $pinjam->user->name }}</td>
                                            <td>{{ $pinjam->book->judul }}</td>
                                            <td>{{ $pinjam->created_at }}</td>
                                            <td>
                                                <form action="/peminjaman/{{ $pinjam->id }}" method="GET">
                                                    @method('delete')
                                                <button class="btn btn-danger" type="submit">
                                                    Hapus
                                                </button>
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
