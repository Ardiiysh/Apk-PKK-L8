@extends('layouts.layout')
@section('title', 'Dashboard')

@section('content')
@php
    $id = auth()->user()->desa_id;
    $desa = App\Models\Desa::where('id', $id)->get();
    if (auth()->user()->desa_id) {
      $text_nama = $desa['0']['nama_desa'];
    }else{
      $text_nama = auth()->user()->name;
    }
@endphp


    <!-- Main content -->
    <section class="content">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                <!-- Info boxes -->
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-6 d-flex flex-column align-content-center justify-content-center align-items-center">
                        <div>
                            <h5 class="text-center"> Selamat Datang di Aplikasi </h5>
                            <div class="text-info">
                                <h4 class="text-center">SMART PKK @if(auth()->user()->desa_id) {{ $text_nama }} @endif</h4>
                            </div>
                        </div>
                        <!-- /.info-box -->
                    </div>

                    <!-- fix for small devices only -->
                    <div class="clearfix hidden-md-up"></div>

                    <!-- /.col -->
                    <div class="col-12 col-sm-6 col-md-6">
                        <div class="img-fluid" alt="Responsive image">
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="{{ asset('img/pkk.png') }}" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="{{ asset('img/ponsel.png') }}" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="{{ asset('img/10pokok.png') }}" alt="Third slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->


        @endsection
