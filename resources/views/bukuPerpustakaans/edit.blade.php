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
                    <input type="text" name="id_perpustakaan" value="{{ $bukuPerpustakaan->id_perpustakaan }}" class="form-control"
                        placeholder="Id Perpustakaan">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Id Buku:</strong>
                    <input type="text" name="id_buku" value="{{ $bukuPerpustakaan->id_buku }}" class="form-control"
                        placeholder="Id Buku">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jumlah:</strong>
                    <input type="text" name="jumlah" value="{{ $bukuPerpustakaan->jumlah }}" class="form-control"
                        placeholder="Jumlah">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>


</form>
@endsection
