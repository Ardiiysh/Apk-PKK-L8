@extends('layouts.layout')

 @section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> @section('title','Edit perpustakaan')</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('perpustakaans.index') }}"> Back</a>
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

    <form action="{{ route('perpustakaans.update',$perpustakaan->id_perpustakaan) }}" method="POST">
        @csrf
        @method('PUT')
<br>
        <div class="card">
            <div class="card-body">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>ID Dasawisma:</strong>
                        <input type="number" min="0" name="id_dasawisma"  value="{{ $perpustakaan->id_dasawisma }}" class="form-control" placeholder="id_dasawisma">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>RT:</strong>
                        <input type="number" min="0" name="rt" value="{{ $perpustakaan->rt }}" class="form-control" placeholder="rt">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>RW:</strong>
                        <input type="number" name="rw" value="{{ $perpustakaan->rw }}" class="form-control" placeholder="rw">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>kelurahan:</strong>
                        <input type="text" name="kelurahan" value="{{ $perpustakaan->kelurahan }}" class="form-control" placeholder="kelurahan">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>kecamatan:</strong>
                        <input type="text" name="kecamatan" value="{{ $perpustakaan->kecamatan }}" class="form-control" placeholder="kecamatan">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>kabupaten/kota:</strong>
                        <input type="text" name="kabupaten_kota" value="{{ $perpustakaan->kabupaten_kota }}" class="form-control" placeholder="kabupaten_kota">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>provinsi:</strong>
                        <input type="text" name="provinsi"  value="{{ $perpustakaan->provinsi }}" class="form-control" placeholder="provinsi">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>nama_perpustakaan:</strong>
                        <input type="text" name="nama_perpustakaan" value="{{ $perpustakaan->nama_perpustakaan }}" class="form-control" placeholder="nama_perpustakaan">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>pengelola:</strong>
                        <input type="text" name="pengelola" value="{{ $perpustakaan->pengelola }}" class="form-control" placeholder="pengelola">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Jumlah buku:</strong>
                        <input type="number" min="0" value="{{ $perpustakaan->jumlah_buku }}" name="jumlah_buku" class="form-control" placeholder="jumlah_buku">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Keterangan:</strong>
                        <input type="text" name="keterangan" value="{{ $perpustakaan->keterangan }}" class="form-control" placeholder="keterangan">
                    </div>
                </div>
               
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </div>
          </div>


    </form>
@endsection