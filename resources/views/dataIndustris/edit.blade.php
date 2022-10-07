@extends('layouts.layout')

 @section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> @section('title','Edit pelatihan')</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('pelatihans.index') }}"> Back</a>
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

    <form action="{{ route('pelatihans.update',$pelatihan->id_pelatihan) }}" method="POST">
        @csrf
        @method('PUT')
<br>
        <div class="card">
            <div class="card-body">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nama pelatihan:</strong>
                        <input type="text" name="nama_pelatihan" value="{{ $pelatihan->nama_pelatihan }}" class="form-control" placeholder="Nama Pelatihan">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Kriteria kader:</strong>
                        <input type="text" name="kriteria_kader" value="{{ $pelatihan->kriteria_kader }}" class="form-control" placeholder="kriteria_kader">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>penyelenggara:</strong>
                        <input type="text" name="penyelenggara" value="{{ $pelatihan->penyelenggara }}" class="form-control" placeholder="0878xxxx">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Keterangan:</strong>
                        <input type="text" name="keterangan" value="{{ $pelatihan->keterangan }}" class="form-control" placeholder="0878xxxx">
                    </div>
                </div>
               
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </div>
          </div>


    </form>
@endsection