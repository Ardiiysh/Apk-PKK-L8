@extends('layouts.layout')

 @section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> @section('title','Edit pelatihanKader')</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('pelatihanKaders.index') }}"> Back</a>
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

    <form action="{{ route('pelatihanKaders.update',$pelatihanKader->id_pelatihan_kader) }}" method="POST">
        @csrf
        @method('PUT')
<br>
        <div class="card">
            <div class="card-body">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>ID Dasawisma:</strong>
                        <input type="number" min="0" name="id_dasawisma" value="{{ $pelatihanKader->id_dasawisma }}" class="form-control" placeholder="id_dasawisma">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>RT:</strong>
                        <input type="number" min="0" name="rt" value="{{ $pelatihanKader->rt }}" class="form-control" placeholder="rt">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>RW:</strong>
                        <input type="number" name="rw" value="{{ $pelatihanKader->rw }}" class="form-control" placeholder="rw">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>kelurahan:</strong>
                        <input type="text" name="kelurahan" value="{{ $pelatihanKader->kelurahan }}" class="form-control" placeholder="kelurahan">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>kecamatan:</strong>
                        <input type="text" name="kecamatan" value="{{ $pelatihanKader->kecamatan }}" class="form-control" placeholder="kecamatan">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>kabupaten/kota:</strong>
                        <input type="text" name="kabupaten_kota" value="{{ $pelatihanKader->kabupaten_kota }}" class="form-control" placeholder="kabupaten_kota">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>provinsi:</strong>
                        <input type="text" name="provinsi" value="{{ $pelatihanKader->provinsi }}" class="form-control" placeholder="provinsi">
                    </div>
                </div>  
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>id warga:</strong>
                        <input type="number" min="0" name="id_warga" value="{{ $pelatihanKader->id_warga }}" class="form-control" placeholder="id_warga">
                    </div>
                </div>  
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>tanggal masuk:</strong>
                        <input type="date" name="tanggal_masuk" value="{{ $pelatihanKader->tanggal_masuk }}" class="form-control" placeholder="tanggal_masuk">
                    </div>
                </div>  
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>kedudukan:</strong>
                        <input type="text" name="kedudukan" value="{{ $pelatihanKader->kedudukan }}" class="form-control" placeholder="kedudukan">
                    </div>
                </div>  
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>keterangan:</strong>
                        <input type="text" name="keterangan" value="{{ $pelatihanKader->keterangan }}"  class="form-control" placeholder="keterangan">
                    </div>
                </div>          

                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </div>
          </div>


    </form>
@endsection