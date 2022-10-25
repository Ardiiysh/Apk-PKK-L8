@extends('layouts.layout')

 @section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> @section('title','Edit Hatinya Pkk')</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('hatinyaPkks.index') }}"> Back</a>
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

    <form action="{{ route('hatinyaPkks.update',$hatinyaPkk->id_hatinya_pkk) }}" method="POST">
        @csrf
        @method('PUT')
<br>
        <div class="card">
            <div class="card-body">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>komoditi:</strong>
                        <input type="text" name="komoditi" value="{{ $hatinyaPkk->komoditi }}" class="form-control" placeholder="komoditi">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Kategori:</strong>
                        <input type="text" name="kategori" value="{{ $hatinyaPkk->kategori }}" class="form-control" placeholder="kategori">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Keterangan:</strong>
                        <input type="text" name="keterangan" value="{{ $hatinyaPkk->keterangan }}" class="form-control" placeholder="0878xxxx">
                    </div>
                </div>
               
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </div>
          </div>


    </form>
@endsection