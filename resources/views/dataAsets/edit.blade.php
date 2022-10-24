@extends('layouts.layout')

 @section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> @section('title','Edit dataAset')</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('dataAsets.index') }}"> Back</a>
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

    <form action="{{ route('dataAsets.update',$dataAset->id_data_aset) }}" method="POST">
        @csrf
        @method('PUT')
<br>
        <div class="card">
            <div class="card-body">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>ID Dasawisma:</strong>
                        <input ttype="number" min="0" name="id_dasawisma" value="{{ $dataAset->id_dasawisma }}" class="form-control" placeholder="ID Dasawisma">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>RT:</strong>
                        <input type="number" min="0" name="rt" value="{{ $dataAset->rt }}" class="form-control" min="-1" placeholder="RT">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>RW:</strong>
                        <input type="number" min="0" name="rw" value="{{ $dataAset->rw }}" class="form-control" min="-1" placeholder="rw">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>kelurahan:</strong>
                        <input type="text" name="kelurahan" value="{{ $dataAset->kelurahan }}" class="form-control" placeholder="kelurahan">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>kecamatan:</strong>
                        <input type="text" name="kecamatan" value="{{ $dataAset->kecamatan }}" class="form-control" placeholder="kecamatan">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>kabupate_kota:</strong>
                        <input type="text" name="kabupaten_kota" value="{{ $dataAset->kabupaten_kota }}" class="form-control" placeholder="kabupate_kota">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>provinsi:</strong>
                        <input type="text" name="provinsi" value="{{ $dataAset->provinsi }}"  class="form-control" placeholder="provinsi">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Keterangan:</strong>
                        <input type="text" name="keterangan" value="{{ $dataAset->keterangan }}"  class="form-control" placeholder="keterangan">
                    </div>
                </div>    
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>nama warung pkk:</strong>
                        <input type="text" name="nama_warung_pkk" value="{{ $dataAset->nama_warung_pkk }}"  class="form-control" placeholder="nama warung pkk">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>pengelola:</strong>
                        <input type="text" name="pengelola" value="{{ $dataAset->pengelola }}"  class="form-control" placeholder="pengelola">
                    </div>
                </div>   
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </div>
          </div>


    </form>
@endsection