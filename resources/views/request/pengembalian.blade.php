@extends('layouts.layout')

@section('tittle', 'Pengembalian')
@section('content')
        <!-- Main Content -->
        <div id="content">
            {{-- Topbar --}}
            <!-- Begin Page Content -->
            <div class="container-fluid">
                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Data Pengembalian</h1>
                <p class="mb-4">Data untuk mengelola pengembalian</p>
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Data Pengemmbalian</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead class="thead-dark">
                                    <tr class="text-center">
                                        <th>Id</th>
                                        <th>Dikembalikan oleh:</th>
                                        <th>Tanggal_Pengembalian</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                    </tr>
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
