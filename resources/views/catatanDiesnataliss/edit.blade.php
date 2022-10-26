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
            {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Id Dasa Wisma:</strong>
                    <input type="text" name="id_dasa_wisma" value="{{ $catatanDiesnatalis->id_dasawisma }}" class="form-control"
                        placeholder="Id Dasa Wisma">
                </div>
            </div> --}}
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>RT:</strong>
                    <select type="number" min="0"  name="rt"    class="form-control" placeholder="Masukkan RT">
                        <option >{{ $catatanDiesnatalis->rt }}</option>
                        @foreach ($dasawisma as $id)
                        <option value="{{$id->rt}}"> {{$id->rt}}</option>
                         @endforeach
                       </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>RW:</strong>
                    <select type="number" min="0"  name="rw"  class="form-control" placeholder="Masukkan RW">
                        <option > {{ $catatanDiesnatalis->rw }}</option>
                        @foreach ($dasawisma as $id)
                        <option value="{{$id->rw}}"> {{$id->rw}}</option>
                         @endforeach
                       </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>kelurahan:</strong>
                    <select type="text" name="kelurahan"    class="form-control" placeholder="Masukkan kelurahan">
                        <option >{{ $catatanDiesnatalis->kelurahan }}</option>
                        @foreach ($dasawisma as $id)
                        <option value="{{$id->kelurahan}}"> {{$id->kelurahan}}</option>
                         @endforeach
                       </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>kecamatan:</strong>
                    <select type="text" name="kecamatan"  class="form-control" placeholder="Masukkan kecamatan">
                        <option >  {{ $catatanDiesnatalis->kecamatan }} </option>
                        @foreach ($dasawisma as $id)
                        <option value="{{$id->kecamatan}}"> {{$id->kecamatan}}</option>
                         @endforeach
                       </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>kabupaten/kota:</strong>
                    <select type="text" name="kabupaten_kota"  class="form-control" placeholder="Masukkan kabupaten/kota">
                        <option > {{ $catatanDiesnatalis->kabupaten_kota }} </option>
                        @foreach ($dasawisma as $id)
                        <option value="{{$id->kabupaten_kota}}"> {{$id->kabupaten_kota}}</option>
                         @endforeach
                       </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>provinsi:</strong>
                    <select type="text" name="provinsi"  class="form-control" placeholder="Masukkan provinsi">
                        <option > {{ $catatanDiesnatalis->provinsi }} </option>
                        @foreach ($dasawisma as $id)
                        <option value="{{$id->provinsi}}"> {{$id->provinsi}}</option>
                         @endforeach
                       </select>
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
