@extends('layouts.layout')

 @section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> @section('title','Edit dataPosyandu')</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('dataPosyandus.index') }}"> Back</a>
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

    <form action="{{ route('dataPosyandus.update',$dataPosyandu->id_data_posyandu) }}" method="POST">
        @csrf
        @method('PUT')
<br>
        <div class="card">
            <div class="card-body">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>ID Dasawisma:</strong>
                        <input type="number" min="0" name="id_dasawisma" value="{{ $dataPosyandu->id_dasawisma }}" class="form-control" placeholder="id_dasawisma">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>RT:</strong>
                        <input type="number" min="0" name="rt" value="{{ $dataPosyandu->rt }}" class="form-control" placeholder="rt">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>RW:</strong>
                        <input type="number" name="rw" value="{{ $dataPosyandu->rw }}" class="form-control" placeholder="rw">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>kelurahan:</strong>
                        <input type="text" name="kelurahan" value="{{ $dataPosyandu->kelurahan }}" class="form-control" placeholder="kelurahan">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>kecamatan:</strong>
                        <input type="text" name="kecamatan" value="{{ $dataPosyandu->kecamatan }}" class="form-control" placeholder="kecamatan">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>kabupaten/kota:</strong>
                        <input type="text" name="kabupaten_kota" value="{{ $dataPosyandu->kabupaten_kota }}" class="form-control" placeholder="kabupaten_kota">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>provinsi:</strong>
                        <input type="text" name="provinsi" value="{{ $dataPosyandu->provinsi }}" class="form-control" placeholder="provinsi">
                    </div>
                </div>  
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>nama posyandu:</strong>
                        <input type="text" name="nama_posyandu" value="{{ $dataPosyandu->nama_posyandu }}" class="form-control" placeholder="nama_posyandu">
                    </div>
                </div>             
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>pengelola:</strong>
                        <input type="text" name="pengelola" value="{{ $dataPosyandu->pengelola }}" class="form-control" placeholder="pengelola">
                    </div>
                </div>             
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>sekretaris:</strong>
                        <input type="text" name="sekretaris" value="{{ $dataPosyandu->sekretaris }}" class="form-control" placeholder="sekretaris">
                    </div>
                </div>             
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>jenis posyandu:</strong>
                        <input type="text" name="jenis_posyandu" value="{{ $dataPosyandu->jenis_posyandu }}" class="form-control" placeholder="jenis_posyandu">
                    </div>
                </div>             
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>jumlah kader:</strong>
                        <input  type="number" min="0" name="jumlah_kader" value="{{ $dataPosyandu->jumlah_kader }}" class="form-control" placeholder="jumlah_kader">
                    </div>
                </div>     
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>keterangan:</strong>
                        <input type="text" name="keterangan" value="{{ $dataPosyandu->keterangan }}"  class="form-control" placeholder="keterangan">
                    </div>
                </div>          

                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </div>
          </div>


    </form>
@endsection