@extends('layouts.layout')

 @section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> @section('title','Edit catatanKeluarga')</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('catatanKeluargas.index') }}"> Back</a>
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

    <form action="{{ route('catatanKeluargas.update',$catatanKeluarga->id_catatan_keluarga) }}" method="POST">
        @csrf
        @method('PUT')
<br>
        <div class="card">
            <div class="card-body">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Kepala Rumah Tangga:</strong>
                        <input type="text" name="kepala_rumah_tangga" value="{{ $catatanKeluarga->kepala_rumah_tangga }}" class="form-control" placeholder="kepala_rumah_tangga">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Id Dasawisma:</strong>
                        <input type="number" min="0" name="id_dasawisma" value="{{ $catatanKeluarga->id_dasawisma }}" class="form-control" placeholder="id_dasawisma">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Tahun:</strong>
                        <input type="number" min="0" name="tahun" value="{{ $catatanKeluarga->tahun }}" class="form-control" placeholder="tahun">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Kriteria Rumah:</strong>
                        <input type="text" name="kriteria_rumah" value="{{ $catatanKeluarga->kriteria_rumah }}" class="form-control" placeholder="kriteria_rumah">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Jamban:</strong>
                        <input type="text" name="jamban" value="{{ $catatanKeluarga->jamban }}" class="form-control" placeholder="jamban">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Jumlah Jamban:</strong>
                        <input type="number" min="0" name="jumlah_jamban" value="{{ $catatanKeluarga->jumlah_jamban }}" class="form-control" placeholder="jumlah_jamban">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Sumber Air:</strong>
                        <input type="text" name="sumber_air" value="{{ $catatanKeluarga->sumber_air }}" class="form-control" placeholder="sumber_air">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Tempat Sampah:</strong>
                        <input type="text" name="tempat_sampah" value="{{ $catatanKeluarga->tempat_sampah }}" class="form-control" placeholder="tempat_sampah">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Keterangan:</strong>
                        <input type="text" name="keterangan" value="{{ $catatanKeluarga->keterangan }}" class="form-control" placeholder="0878xxxx">
                    </div>
                </div>
               
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </div>
          </div>


    </form>
@endsection