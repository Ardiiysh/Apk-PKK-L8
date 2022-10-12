@extends('layouts.layout')

 @section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> @section('title','Edit Rekapitulasi Kelompok Dasawisma')</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('rekapitulasiKelompokDasawismas.index') }}"> Back</a>
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

    <form action="{{ route('rekapitulasiKelompokDasawismas.update',$rekapitulasiKelompokDasawisma->id_rekapitulasi_kelompok_dasawisma) }}" method="POST">
        @csrf
        @method('PUT')
<br>
        <div class="card">
            <div class="card-body">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>ID dasawisma:</strong>
                        <input type="text" name="id_dasawisma" value="{{ $rekapitulasiKelompokDasawisma->id_dasawisma }}" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>RT:</strong>
                        <input type="number" min="0" name="rt" value="{{ $rekapitulasiKelompokDasawisma->rt }}" class="form-control" placeholder="">
                    </div>
                </div>
                
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>RW:</strong>
                        <input type="number" min="0" name="rw" value="{{ $rekapitulasiKelompokDasawisma->rw }}" class="form-control" placeholder="">
                    </div>
                </div>
                
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>kelurahan:</strong>
                        <input type="text" name="kelurahan" value="{{ $rekapitulasiKelompokDasawisma->kelurahan }}" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>kecamatan:</strong>
                        <input type="text" name="kecamatan" value="{{ $rekapitulasiKelompokDasawisma->kecamatan }}" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>kabupaten_kota:</strong>
                        <input type="text" name="kabupaten_kota" value="{{ $rekapitulasiKelompokDasawisma->kabupaten_kota }}" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>provinsi:</strong>
                        <input type="text" name="provinsi" value="{{ $rekapitulasiKelompokDasawisma->provinsi }}" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Tahun:</strong>
                        <input type="number" min="0" name="tahun" value="{{ $rekapitulasiKelompokDasawisma->tahun }}" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Keterangan:</strong>
                        <input type="text" name="keterangan" value="{{ $rekapitulasiKelompokDasawisma->keterangan }}" class="form-control" placeholder="">
                    </div>
                </div>            
               
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </div>
          </div>


    </form>
@endsection