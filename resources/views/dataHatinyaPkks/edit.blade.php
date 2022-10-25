@extends('layouts.layout')

 @section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> @section('title','Edit dataHatinyaPkk')</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('dataHatinyaPkks.index') }}"> Back</a>
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

    <form action="{{ route('dataHatinyaPkks.update',$dataHatinyaPkk->id_data_hatinya_pkk) }}" method="POST">
        @csrf
        @method('PUT')
<br>
        <div class="card">
            <div class="card-body">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>id data hatinya:</strong>
                        <input type="number" min="0" name="id_data_hatinya" value="{{ $dataHatinyaPkk->id_data_hatinya }}" class="form-control" placeholder="id_data_hatinya">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>id hatinya pkk:</strong>
                        <input type="number" min="0" name="id_hatinya_pkk" value="{{ $dataHatinyaPkk->id_hatinya_pkk }}" class="form-control" placeholder="id_hatinya_pkk">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>jumlah:</strong>
                        <input type="number" min="0" name="jumlah" value="{{ $dataHatinyaPkk->jumlah }}" class="form-control" placeholder="jumlah">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>satuan:</strong>
                        <input type="text" name="satuan" value="{{ $dataHatinyaPkk->satuan }}" class="form-control" placeholder="satuan">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </div>
          </div>


    </form>
@endsection
