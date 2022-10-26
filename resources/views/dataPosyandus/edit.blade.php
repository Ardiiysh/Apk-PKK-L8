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
                        <strong>RT:</strong>
                        <select type="number" min="0"  name="rt"   class="form-control" placeholder="Masukkan RT">
                            <option >{{ $dataPosyandu->rt }}</option>
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
                            <option >{{ $dataPosyandu->rw }}</option>
                            @foreach ($dasawisma as $id)
                            <option value="{{$id->rw}}"> {{$id->rw}}</option>
                             @endforeach
                           </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>kelurahan:</strong>
                        <select type="text" name="kelurahan"   class="form-control" placeholder="Masukkan kelurahan">
                            <option >{{ $dataPosyandu->kelurahan }}</option>
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
                            <option >{{ $dataPosyandu->kecamatan }} </option>
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
                            <option >{{ $dataPosyandu->kabupaten_kota }}</option>
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
                            <option > {{ $dataPosyandu->provinsi }} </option>
                            @foreach ($dasawisma as $id)
                            <option value="{{$id->provinsi}}"> {{$id->provinsi}}</option>
                             @endforeach
                           </select>
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