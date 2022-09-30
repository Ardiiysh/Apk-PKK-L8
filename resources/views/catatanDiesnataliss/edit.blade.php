@extends('layouts.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            <h2> @section('title', 'Edit catatanDiesnatalis')</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('catatanDiesnataliss.index') }}"> Back</a>
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

<form action="{{ route('catatanDiesnataliss.update', $catatanDiesnatalis->id) }}" method="POST">
    @csrf
    @method('PUT')
    <br>
    <div class="card">
        <div class="card-body">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Id Dasa Wisma:</strong>
                    <input type="text" name="id_dasa_wisma" value="{{ $catatanDiesnatalis->id_dasawisma }}" class="form-control"
                        placeholder="Id Dasa Wisma">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>RT:</strong>
                    <input type="text" name="rt" value="{{ $catatanDiesnatalis->rt }}" class="form-control" placeholder="RT">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>RW:</strong>
                    <input type="text" name="rw" value="{{ $catatanDiesnatalis->rw }}" class="form-control" placeholder="RW">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kelurahan:</strong>
                    <input type="text" name="kelurahan" value="{{ $catatanDiesnatalis->kelurahan }}" class="form-control" placeholder="Kelurahan">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kecamatan:</strong>
                    <input type="text" name="kecamatan" value="{{ $catatanDiesnatalis->kecamatan }}" class="form-control" placeholder="Kecamatan">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kabupaten/Kota:</strong>
                    <input type="text" name="kabupaten/kota" value="{{ $catatanDiesnatalis->kabupaten_kota }}" class="form-control" placeholder="Kabupaten/Kota">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Provinsi:</strong>
                    <input type="text" name="provinsi" value="{{ $catatanDiesnatalis->provinsi }}" class="form-control" placeholder="Provinsi">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Bulan:</strong>
                    <input type="text" name="bulan" value="{{ $catatanDiesnatalis->bulan }}" class="form-control" placeholder="Bulan">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tahun:</strong>
                    <input type="text" name="tahun" value="{{ $catatanDiesnatalis->tahun }}" class="form-control" placeholder="Tahun">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Ibu:</strong>
                    <input type="text" name="nama_ibu" value="{{ $catatanDiesnatalis->nama_ibu }}" class="form-control" placeholder="Nama Ibu">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Suami:</strong>
                    <input type="text" name="nama_suami" value="{{ $catatanDiesnatalis->nama_suami }}" class="form-control" placeholder="Nama Suami">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Anak:</strong>
                    <input type="text" name="nama_anak" value="{{ $catatanDiesnatalis->nama_anak }}" class="form-control" placeholder="Nama Anak">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Status:</strong>
                    <input type="text" name="status" value="{{ $catatanDiesnatalis->status }}" class="form-control" placeholder="Status">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jenkel:</strong>
                    <input type="text" name="jenkel" value="{{ $catatanDiesnatalis->jenkel }}" class="form-control" placeholder="Status">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>JK:</strong>
                    <input type="text" name="jk" value="{{ $catatanDiesnatalis->jk }}" class="form-control" placeholder="JK">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tgl Lahir:</strong>
                    <input type="text" name="tgl_lahir" value="{{ $catatanDiesnatalis->tgl_lahir }}" class="form-control" placeholder="Tgl Lahir">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Akta:</strong>
                    <input type="text" name="akta" value="{{ $catatanDiesnatalis->akta }}" class="form-control" placeholder="Akta">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Sebab:</strong>
                    <input type="text" name="sebab" value="{{ $catatanDiesnatalis->sebab }}" class="form-control" placeholder="Sebab">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Keterangan:</strong>
                    <input type="text" name="keterangan" value="{{ $catatanDiesnatalis->keterangan }}" class="form-control" placeholder="Keterangan">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>


</form>
@endsection
