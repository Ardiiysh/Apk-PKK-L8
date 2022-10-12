@extends('layouts.layout')

 @section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> @section('title','Edit Rekapitulasi Kelompok Pkk Rt')</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('rekapitulasiKelompokPkkRts.index') }}"> Back</a>
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

    <form action="{{ route('rekapitulasiKelompokPkkRts.update',$rekapitulasiKelompokPkkRt->id_rekapitulasi_kelompok_pkk_rt) }}" method="POST">
        @csrf
        @method('PUT')
<br>
        <div class="card">
            <div class="card-body">

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Rt:</strong>
                        <input type="number" min="0" name="rt" value="{{ $rekapitulasiKelompokPkkRt->rt }}" class="form-control" placeholder="rt">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Rw:</strong>
                        <input type="number" min="0" name="rw" value="{{ $rekapitulasiKelompokPkkRt->rw }}" class="form-control" placeholder="rw">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>kelurahan:</strong>
                        <input type="text" name="kelurahan" value="{{ $rekapitulasiKelompokPkkRt->kelurahan }}" class="form-control" placeholder="kelurahan">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Tahun:</strong>
                        <input type="number" min="0" name="tahun" value="{{ $rekapitulasiKelompokPkkRt->tahun }}" class="form-control" placeholder="tahun">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Keterangan:</strong>
                        <input type="text" name="keterangan" value="{{ $rekapitulasiKelompokPkkRt->keterangan }}" class="form-control" placeholder="keterangan">
                    </div>
                </div>
               
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </div>
          </div>


    </form>
@endsection