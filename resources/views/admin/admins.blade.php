@extends('layouts.layout')


@section('tittle', 'Dashboard Admin')
@section('content')
    <!-- Main Content -->
            <div id="content">
                {{-- Topbar --}}
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    {{-- Isi kontentnya --}}
                    <div class="col-lg-12">
                        <!-- Basic Card Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">
                                    Selamat Datang, {{ auth()->user()->name }}
                                </h6>
                            </div>
                            <div class="card-body">
                                @if (session('success-login'))
                                <div class="alert alert-success" role="alert" >
                                    {{ session('success-login') }}
                                  </div>
                                @endif
                                @if (session('success-register'))
                                <div class="alert alert-success" role="alert" >
                                    {{ session('success-register') }}
                                  </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
@endsection
