@extends('layouts.layout')

 @section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> @section('title','Edit Rekapitulasi Kelahiran Kematian')</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('rekapitulasiKelahiranKematians.index') }}"> Back</a>
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

    <form action="{{ route('rekapitulasiKelahiranKematians.update',$rekapitulasiKelahiranKematian->id_rekapitulasi_kelahiran_kematian) }}" method="POST">
        @csrf
        @method('PUT')
<br>
        <div class="card">
            <div class="card-body">
                {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>ID Dasawisma:</strong>
                        <input type="number" min="0" name="id_dasawisma"  value="{{ $rekapitulasiKelahiranKematian->id_dasawisma }}" class="form-control" placeholder="id_dasawisma">
                    </div>
                </div> --}}
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>RT:</strong>
                            <select type="number" min="0"  name="rt"  class="form-control" placeholder="Masukkan RT">
                                <option > {{ $rekapitulasiKelahiranKematian->rt }} </option>
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
                                <option >  {{ $rekapitulasiKelahiranKematian->rw }} </option>
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
                                <option > {{ $rekapitulasiKelahiranKematian->kelurahan }}</option>
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
                                <option > {{ $rekapitulasiKelahiranKematian->kecamatan }} </option>
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
                                <option > {{ $rekapitulasiKelahiranKematian->kabupaten_kota }} /option>
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
                                <option > {{ $rekapitulasiKelahiranKematian->provinsi }} </option>
                                @foreach ($dasawisma as $id)
                                <option value="{{$id->provinsi}}"> {{$id->provinsi}}</option>
                                 @endforeach
                               </select>
                        </div>
                    </div> 
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Keterangan:</strong>
                        <input type="text" name="keterangan" value="{{ $rekapitulasiKelahiranKematian->keterangan }}" class="form-control" placeholder="keterangan">
                    </div>
                </div>
               
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </div>
          </div>


    </form>
@endsection