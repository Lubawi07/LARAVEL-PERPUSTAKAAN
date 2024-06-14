@extends('layouts.layout')

@section('tittle', 'Perpus Buku')

@section('content')
    <!-- Main Content -->
    <div id="content">
        {{-- Topbar --}}
        <!-- Begin Page Content -->
        <div class="container-fluid">
            {{-- isi kontennya --}}
            <h1 class="h3 mb-2 text-gray-800">Buku</h1>
            <p class="mb-4">Silahkan pilih buku yang ingin dipinjam</p>
            <div class="card-container" style="display: flex; flex-wrap: wrap; gap: 10px;">
                @foreach ($buku as $item )
                <div class="card" style="width: 18rem; margin: 10px;">
                    <img src="{{ asset('bukuperpus/'.$item->gambar) }}" class="card-img-top" alt="{{ $item->gambar }}" style="width: 150px; height: auto; margin: 0 auto; display: block;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->judul }}</h5>
                        <p class="card-text">{{ $item->penerbit }}</p>
                        <button class="btn btn-sm btn-success" type="button" data-target="#modal-pinjam" data-toggle="modal">Pinjam Buku</button>
                        <a class="btn btn-sm btn-primary" type="button" href="/detail/buku/{{ $item->id }}" >
                            Detail Buku
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->
    @include('user.pinjambuku')
@endsection
