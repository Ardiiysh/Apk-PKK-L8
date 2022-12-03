@extends('layouts.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            <h2> @section('title', 'Edit Buku Perpustakaan')</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('bukuPerpustakaans.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('bukuPerpustakaans.update', $bukuPerpustakaan->id) }}" method="POST">
    @csrf
    @method('PUT')
    <br>
    <div class="card">
        <div class="card-body">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Id Perpustakaan:</strong>
                    <input value="{{ $bukuPerpustakaan->id_perpustakaan }}" type="text" name="id_perpustakaan" class="form-control"
                        placeholder="Id Perpustakaan">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Perpustakaan:</strong>
                    <input value="{{ $bukuPerpustakaan->nama_perpus }}" type="text" name="nama_perpus" class="form-control"
                        placeholder="Nama Perpustakaan">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Id Buku:</strong>
                    <input value="{{ $bukuPerpustakaan->id_buku }}" type="text" name="id_buku" class="form-control" placeholder="Id Buku">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Judul Buku:</strong>
                    <input value="{{ $bukuPerpustakaan->judul_buku }}" type="text" name="judul_buku" class="form-control" placeholder="Id Buku">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Pengarang Buku:</strong>
                    <input value="{{ $bukuPerpustakaan->pengarang }}" type="text" name="pengarang" class="form-control" placeholder="Pengarang Buku">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tahun:</strong>
                    <input value="{{ $bukuPerpustakaan->tahun }}" type="number" min=1 name="tahun" class="form-control" placeholder="Tahun">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jumlah:</strong>
                    <input value="{{ $bukuPerpustakaan->jumlah }}" type="number" min=1 name="jumlah" class="form-control" placeholder="Jumlah">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>


</form>
@endsection
