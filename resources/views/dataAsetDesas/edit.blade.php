@extends('layouts.layout')

 @section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> @section('title','Edit dataAsetDesa')</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('dataAsetDesas.index') }}"> Back</a>
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

    <form action="{{ route('dataAsetDesas.update',$dataAsetDesa->id_data_aset_desa) }}" method="POST">
        @csrf
        @method('PUT')
<br>
        <div class="card">
            <div class="card-body">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>ID Data Aset:</strong>
                        <input type="number" min="0" name="id_data_aset" value="{{ $dataAsetDesa->id_data_aset }}" class="form-control" placeholder="id_data_aset">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>id aset desa:</strong>
                        <input type="number" min="0" name="id_aset_desa" value="{{ $dataAsetDesa->id_aset_desa }}" class="form-control" placeholder="id_aset_desa">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>volume:</strong>
                        <input type="text" name="volume" value="{{ $dataAsetDesa->volume }}" class="form-control" placeholder="volume">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>satuan:</strong>
                        <input type="text" name="satuan" value="{{ $dataAsetDesa->satuan }}" class="form-control" placeholder="satuan">
                    </div>
                </div>
               
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </div>
          </div>


    </form>
@endsection