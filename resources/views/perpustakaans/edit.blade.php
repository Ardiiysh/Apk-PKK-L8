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
                {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>ID Dasawisma:</strong>
                        <input type="number" min="0" name="id_dasawisma"  value="{{ $perpustakaan->id_dasawisma }}" class="form-control" placeholder="id_dasawisma">
                    </div>
                </div> --}}
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>RT:</strong>
                        <select type="number" min="0"  name="rt"  class="form-control" placeholder="Masukkan RT">
                            <option > {{ $perpustakaan->rt }} </option>
                            @foreach ($dasawisma as $id)
                            <option value="{{$id->rt}}"> {{$id->rt}}</option>
                             @endforeach
                           </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>RW:</strong>
                        <select type="number" min="0"  name="rw" class="form-control" placeholder="Masukkan RW">
                            <option >  {{ $perpustakaan->rw }} </option>
                            @foreach ($dasawisma as $id)
                            <option value="{{$id->rw}}"> {{$id->rw}}</option>
                             @endforeach
                           </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>kelurahan:</strong>
                        <select type="text" name="kelurahan"  class="form-control" placeholder="Masukkan kelurahan">
                            <option > {{ $perpustakaan->kelurahan }}</option>
                            @foreach ($dasawisma as $id)
                            <option value="{{$id->kelurahan}}"> {{$id->kelurahan}}</option>
                             @endforeach
                           </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>kecamatan:</strong>
                        <select type="text" name="kecamatan"   class="form-control" placeholder="Masukkan kecamatan">
                            <option > {{ $perpustakaan->kecamatan }} </option>
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
                            <option > {{ $perpustakaan->kabupaten_kota }} /option>
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
                            <option > {{ $perpustakaan->provinsi }} </option>
                            @foreach ($dasawisma as $id)
                            <option value="{{$id->provinsi}}"> {{$id->provinsi}}</option>
                             @endforeach
                           </select>
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