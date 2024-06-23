@extends('layouts.layout')

@section('tittle', 'Data Admin')

@section('content')
    <!-- Main Content -->
            <div id="content">
                {{-- Topbar --}}
                <!-- Begin Page Content -->
                <div class="container-fluid">
                {{-- alert jika data berhasil diubah --}}
                @if (session('pesan-update'))
                <div class="alert alert-success" role="alert">
                    {{ session('pesan-update') }}
                </div>
                @endif
                {{-- alert jika data berhasil dihapus --}}
                @if (session('pesan-hapus'))
                <div class="alert alert-success" role="alert">
                    {{ session('pesan-hapus') }}
                </div>
                @endif
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Admin</h1>
                    <p class="mb-4">Data untuk mengelola admin</p>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Admin</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead class="thead-dark">
                                        <tr class="text-center">
                                            <th style="width: 10%">Id</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                            <th>Dibuat</th>
                                            <th>Diupdate</th>
                                            <th style="width: 20%">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data_user as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->password }}</td>
                                            <td>{{ $user->created_at }}</td>
                                            <td>{{ $user->updated_at }}</td>
                                            <td>
                                                <form action="/data/admin/{{ $user->id }}" method="GET">
                                                    @method('delete')
                                                    <a href="/data/admin/{{ $user->id }}/edit" class="btn btn-sm btn-warning">
                                                        <i class="fas fa-solid fa-pen"></i>
                                                        Edit
                                                    </a>
                                                    <button class="btn btn-sm btn-danger" type="submit">
                                                            <i class="fas fa-solid fa-trash"></i>
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
