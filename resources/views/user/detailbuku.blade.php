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
                    <img src="{{ asset('img/romeo.jpg') }}" alt="Descriptive Alt Text" class="img-fluid mr-3" style="max-width: 370px; height: auto; border-radius: 10px;">
                    <div class="judul-teks" style="margin-top: 20px; margin-bottom: 10px;">
                        <h5 style=" font-weight: bold; font-size: 50px; margin-bottom: 30px; color: black;">Romeo and Juliet</h5>
                        <h6 style=" font-weight: 600; font-size: 27px; margin-bottom: 30px; color: black;">Pengarang: Anies Basudara</h6>
                        <h6 style="font-weight: 600; font-size: 20px; margin-bottom: 30px; color: black;">Penerbit: Shakespeare Company</h6>
                        <h6 style=" font-weight: 600; font-size: 20px; margin-bottom: 30px; color: black;">Tahun Terbit: 1597</h6>
                        <h6 style="font-weight: 600; font-size: 20px; margin-bottom: 30px; color: black;">Jumlah Halaman: 1597</h6>
                        <p style="font-size: 20px; margin-bottom: 0; color: black;">Sinopsis:</p>
                        <p style="font-size: 19px; margin-bottom: 0; color: black;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. At consequatur vel iure possimus cum odio debitis! Exercitationem temporibus veritatis error fugit dolor aut nihil! Reprehenderit voluptatem ratione nisi earum quibusdam?</p>
                    </div>
                </div>
                <div class="button-container" style="margin-top: -70px;"> <!-- Menambah margin-top -->
                    <button class="btn btn-secondary" >Kembali</button>
                    <button class="btn btn-primary">Pinjam</button>
                </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
@endsection
