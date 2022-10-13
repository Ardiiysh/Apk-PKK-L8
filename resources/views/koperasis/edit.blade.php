@extends('layouts.layout')

 @section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> @section('title','Edit koperasi')</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('koperasis.index') }}"> Back</a>
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

    <form action="{{ route('koperasis.update',$koperasi->id_koperasi) }}" method="POST">
        @csrf
        @method('PUT')
<br>
        <div class="card">
            <div class="card-body">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nama Koperasi:</strong>
                        <input type="text" name="nama_koperasi"  value="{{ $koperasi->nama_koperasi }}" class="form-control" placeholder="nama_koperasi">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Jenis Koperasi:</strong>
                        <input type="text" name="jenis_koperasi"  value="{{ $koperasi->jenis_koperasi }}" class="form-control" placeholder="jenis_koperasi">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Status Hukum:</strong>
                        <input type="text" name="status_hukum"  value="{{ $koperasi->status_hukum }}" class="form-control" placeholder="status_hukum">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Anggota laki-laki:</strong>
                        <input type="text" name="anggota_laki_laki"  value="{{ $koperasi->anggota_laki_laki }}" class="form-control" placeholder="anggota_laki_laki">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Anggota Perempuan:</strong>
                        <input type="text" name="anggota_perempuan"  value="{{ $koperasi->anggota_perempuan }}" class="form-control" placeholder="anggota_perempuan">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Keterangan:</strong>
                        <input type="text" name="keterangan" value="{{ $koperasi->keterangan }}" class="form-control" placeholder="0878xxxx">
                    </div>
                </div>
               
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </div>
          </div>


    </form>
@endsection