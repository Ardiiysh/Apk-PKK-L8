@extends('layouts.layout')

 @section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> @section('title','Edit Buku')</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('bukus.index') }}"> Back</a>
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

    <form action="{{ route('bukus.update',$buku->id) }}" method="POST">
        @csrf
        @method('PUT')
        <br>
        <div class="card">
            <div class="card-body">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nama Buku:</strong>
                        <input value="{{ $buku->nama_buku }}" type="text" name="nama_buku" class="form-control" placeholder="nama buku">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Tahun:</strong>
                        <input value="{{ $buku->tahun }}" type="number" min=1 name="tahun" class="form-control" placeholder="tahun">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Penulis:</strong>
                        <input value="{{ $buku->penulis }}" type="text" name="penulis" class="form-control" placeholder="Penulis">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Keterangan:</strong>
                        <textarea name="keterangan" class="form-control" id="" cols="30" rows="10">{{ $buku->keterangan }}</textarea>
                    </div>
                </div>
               
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </div>
          </div>


    </form>
@endsection