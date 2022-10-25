@extends('layouts.layout')

 @section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> @section('title','Edit data Koperasi')</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('dataKoperasis.index') }}"> Back</a>
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

    <form action="{{ route('dataKoperasis.update',$dataKoperasi->id_data_koperasi) }}" method="POST">
        @csrf
        @method('PUT')
<br>
        <div class="card">
            <div class="card-body">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>ID Dasawisma:</strong>
                        <input type="text" name="id_dasawisma" value="{{ $dataKoperasi->id_dasawisma }}" class="form-control" placeholder="nama_dataKoperasi">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>RT:</strong>
                        <input type="number" min="0" name="rt" value="{{ $dataKoperasi->rt }}" class="form-control" placeholder="rt">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>RW:</strong>
                        <input type="number" min="0" name="rw" value="{{ $dataKoperasi->rw }}" class="form-control" placeholder="rw">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Kelurahan:</strong>
                        <input type="text" name="kelurahan" value="{{ $dataKoperasi->kelurahan }}" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Kecamatan:</strong>
                        <input type="text" name="kecamatan" value="{{ $dataKoperasi->kecamatan }}" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Kabupaten/Kota:</strong>
                        <input type="text" name="kabupaten_kota" value="{{ $dataKoperasi->kabupaten_kota }}" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Provinsi:</strong>
                        <input type="text" name="provinsi" value="{{ $dataKoperasi->provinsi }}" class="form-control" placeholder="">
                    </div>
                </div>
                 <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Keterangan:</strong>
                        <input type="text" name="keterangan" value="{{ $dataKoperasi->keterangan }}" class="form-control" placeholder="">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </div>
          </div>


    </form>
@endsection
