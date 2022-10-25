@extends('layouts.layout')

 @section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> @section('title','Edit kelompokBelajar')</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('kelompokBelajars.index') }}"> Back</a>
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

    <form action="{{ route('kelompokBelajars.update',$kelompokBelajar->id_kelompok_belajar) }}" method="POST">
        @csrf
        @method('PUT')
<br>
        <div class="card">
            <div class="card-body">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>nama kelompok belajar:</strong>
                        <input type="text" name="nama_kelompok_belajar"  value="{{ $kelompokBelajar->nama_kelompok_belajar }}" class="form-control" placeholder="nama_kelompok_belajar">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>jenis kelompok belajar:</strong>
                        <input type="text" name="jenis_kelompok_belajar"  value="{{ $kelompokBelajar->jenis_kelompok_belajar }}" class="form-control" placeholder="jenis_kelompok_belajar">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Keterangan:</strong>
                        <input type="text" name="keterangan" value="{{ $kelompokBelajar->keterangan }}" class="form-control" placeholder="keterangan">
                    </div>
                </div>
               
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </div>
          </div>


    </form>
@endsection