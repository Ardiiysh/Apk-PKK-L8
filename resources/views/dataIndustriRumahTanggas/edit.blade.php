@extends('layouts.layout')

 @section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> @section('title','Edit dataIndustriRumahTangga')</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('dataIndustriRumahTanggas.index') }}"> Back</a>
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

    <form action="{{ route('dataIndustriRumahTanggas.update',$dataIndustriRumahTangga->id_industri_rumah_tangga) }}" method="POST">
        @csrf
        @method('PUT')
<br>
        <div class="card">
            <div class="card-body">
               
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>id data industri:</strong>
                        <input type="number" min="0" value="{{ $dataIndustriRumahTangga->id_data_industri }}"  name="id_data_industri" class="form-control" placeholder="id data industri">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>id industri rumah tangga:</strong>
                        <input type="number" min="0" name="id_industri_rumah_tangga" value="{{ $dataIndustriRumahTangga->id_industri_rumah_tangga }}" class="form-control" placeholder="id industri rumah tangga">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>volume:</strong>
                        <input type="text" name="volume" value="{{ $dataIndustriRumahTangga->volume }}" class="form-control" placeholder="volume">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>satuan:</strong>
                        <input type="text" name="satuan" value="{{ $dataIndustriRumahTangga->satuan }}" class="form-control" placeholder="satuan">
                    </div>
                </div>
               
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </div>
          </div>


    </form>
@endsection