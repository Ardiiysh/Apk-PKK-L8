@extends('layouts.layout')

 @section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> @section('title','Edit dataKejar')</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('dataKejars.index') }}"> Back</a>
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

    <form action="{{ route('dataKejars.update',$dataKejar->id_data_kejar) }}" method="POST">
        @csrf
        @method('PUT')
<br>
        <div class="card">
            <div class="card-body">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>id data kelompok belajar:</strong>
                        <input type="number" min="0" name="id_data_kelompok_belajar" value="{{ $dataKejar->id_data_kelompok_belajar }}"  class="form-control" placeholder="id_data_kelompok_belajar">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>id kelompok belajar:</strong>
                        <input type="number" min="0" name="id_kelompok_belajar" value="{{ $dataKejar->id_kelompok_belajar }}"  class="form-control" placeholder="id_kelompok_belajar">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>jumlah siswa laki laki:</strong>
                        <input type="number" min="0" name="jumlah_siswa_laki_laki" value="{{ $dataKejar->jumlah_siswa_laki_laki }}"  class="form-control" placeholder="jumlah_siswa_laki_laki">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>jumlah siswa perempuan:</strong>
                        <input type="number" min="0" name="jumlah_siswa_perempuan"value="{{ $dataKejar->jumlah_siswa_perempuan }}"  class="form-control" placeholder="jumlah_siswa_perempuan">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>jumlah pengajar laki laki:</strong>
                        <input type="number" min="0" name="jumlah_pengajar_laki_laki" value="{{ $dataKejar->jumlah_pengajar_laki_laki }}" class="form-control" placeholder="jumlah_pengajar_laki_laki">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>jumlah pengajar perempuan:</strong>
                        <input ttype="number" min="0" name="jumlah_pengajar_perempuan" value="{{ $dataKejar->jumlah_pengajar_perempuan }}" class="form-control" placeholder="jumlah_pengajar_perempuan">
                    </div>
                </div>   

                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </div>
          </div>


    </form>
@endsection