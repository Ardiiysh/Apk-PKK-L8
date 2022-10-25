@extends('layouts.layout')

 @section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> @section('title','Edit dataLayananPosyandu')</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('dataLayananPosyandus.index') }}"> Back</a>
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

    <form action="{{ route('dataLayananPosyandus.update',$dataLayananPosyandu->id_data_layanan_posyandu) }}" method="POST">
        @csrf
        @method('PUT')
<br>
        <div class="card">
            <div class="card-body">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>id data posyandu:</strong>
                        <input type="number" min="0" name="id_data_posyandu" value="{{ $dataLayananPosyandu->id_data_posyandu }}" class="form-control" placeholder="id_data_posyandu">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>id layanan posyandu:</strong>
                        <input type="number" min="0" name="id_layanan_posyandu" value="{{ $dataLayananPosyandu->id_layanan_posyandu }}" class="form-control" placeholder="id_layanan_posyandu">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>frekuensi layanan:</strong>
                        <input type="number" min="0" name="frekuensi_layanan" value="{{ $dataLayananPosyandu->frekuensi_layanan }}" class="form-control" placeholder="frekuensi_layanan">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>pengunjung laki laki:</strong>
                        <input type="number" min="0" name="pengunjung_laki_laki" value="{{ $dataLayananPosyandu->pengunjung_laki_laki }}" class="form-control" placeholder="pengunjung_laki_laki">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>pengunjung perempuan:</strong>
                        <input type="number" min="0" name="pengunjung_perempuan" value="{{ $dataLayananPosyandu->pengunjung_perempuan }}" class="form-control" placeholder="pengunjung_perempuan">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>paramedis laki Laki:</strong>
                        <input ttype="number" min="0" name="paramedis_laki_Laki" value="{{ $dataLayananPosyandu->paramedis_laki_Laki }}" class="form-control" placeholder="paramedis_laki_Laki">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>paramedis perempuan:</strong>
                        <input type="number" min="0" name="paramedis_perempuan" value="{{ $dataLayananPosyandu->paramedis_perempuan }}" class="form-control" placeholder="paramedis_perempuan">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Keterangan:</strong>
                        <input type="text" name="keterangan" value="{{ $dataLayananPosyandu->keterangan }}" class="form-control" placeholder="0878xxxx">
                    </div>
                </div>
               
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </div>
          </div>


    </form>
@endsection