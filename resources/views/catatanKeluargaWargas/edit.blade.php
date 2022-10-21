@extends('layouts.layout')

 @section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> @section('title','Edit Catatan Keluarga Warga')</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('catatanKeluargaWargas.index') }}"> Back</a>
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

    <form action="{{ route('catatanKeluargaWargas.update',$catatanKeluargaWarga->id_catatan_keluarga_warga) }}" method="POST">
        @csrf
        @method('PUT')
<br>
        <div class="card">
            <div class="card-body">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>ID Catatan Keluarga:</strong>
                        <input type="text" name="id_catatan_keluarga" value="{{ $catatanKeluargaWarga->id_catatan_keluarga }}" class="form-control" placeholder="Jenis_catatanKeluargaWarga">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>ID Warga:</strong>
                        <input type="text" name="id_warga" value="{{ $catatanKeluargaWarga->id_warga }}" class="form-control" placeholder="kategori">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </div>
          </div>


    </form>
@endsection
