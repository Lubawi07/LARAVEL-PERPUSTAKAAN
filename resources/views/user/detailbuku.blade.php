@extends('layouts.layout')
@section('tittle', 'Detail Buku')
@section('content')
     <style>
        .image-container {
            text-align: left;
            margin-top: 50px;
            margin-left: 50px;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }

        .judul-teks {
            margin-top: 20px;
            margin-bottom: 10px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            width: 100%;
        }

        .button-container {
            display: flex;
            justify-content: flex-end;
            gap: 10px; /* Jarak antara tombol */
            margin-right: 50px;
        }
    </style>
         <!-- Main Content -->
            <div id="content">
                {{-- Topbar --}}
                <!-- Begin Page Content -->
                <div class="container-fluid">
                <!-- Image Container -->
                <div class="image-container mb-4 d-flex">
                    <img src="{{ asset('bukuperpus/'.$buku->gambar) }}" alt="{{ $buku->gambar }}" class="img-fluid mr-3" style="max-width: 370px; height: auto; border-radius: 10px;">
                    <div class="judul-teks" style="margin-top: 20px; margin-bottom: 10px;">
                        <h5 style=" font-weight: bold; font-size: 50px; margin-bottom: 30px; color: black;">{{ $buku->judul }}</h5>
                        <h6 style="font-weight: 600; font-size: 18px; margin-bottom: 30px; color: black;">Penerbit: {{ $buku->penerbit }}</h6>
                        <h6 style="font-weight: 600; font-size: 18px; margin-bottom: 30px; color: black;">Pengarang: {{ $buku->pengarang }}</h6>
                        <h6 style="font-weight: 600; font-size: 18px; margin-bottom: 30px; color: black;">ISBN: {{ $buku->isbn }}</h6>
                        <h6 style=" font-weight: 600; font-size: 18px; margin-bottom: 30px; color: black;">Tahun Terbit: {{ $buku->tahun_terbit }}</h6>
                        <h6 style="font-weight: 600; font-size: 18px; margin-bottom: 30px; color: black;">Jumlah Halaman: {{ $buku->jumlah_halaman }}</h6>
                        <h6 style="font-weight: 600; font-size: 18px; margin-bottom: 30px; color: black;">Kategori: {{ $buku->kategori_id }}</h6>
                        <p style="font-size: 18px; margin-bottom: 0; color: black;">Sinopsis:</p>
                        <p style="font-size: 19px; margin-bottom: 0; color: black;">{{ $buku->sinopsis }}</p>
                    </div>
                </div>
                <div class="button-container" style="margin-top: 40px"> <!-- Menambah margin-top -->
                    <a class="btn btn-secondary" href="/perpus/buku"  >Kembali</a>
                    <button class="btn btn-sm btn-success" type="button" data-target="#modal-pinjam" data-toggle="modal">Pinjam Buku</button>

                </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
            @include('user.pinjambuku')
@endsection
