@extends('layouts.layout')

 @section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> @section('title','Edit dataKeluarga')</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('dataKeluargas.index') }}"> Back</a>
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

    <form action="{{ route('dataKeluargas.update',$dataKeluarga->id_data_keluarga) }}" method="POST">
        @csrf
        @method('PUT')
<br>
        <div class="card">
            <div class="card-body">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>RT:</strong>
                        <select type="number" min="0"  name="rt"   class="form-control" placeholder="Masukkan RT">
                            <option >{{ $dataKeluarga->rt }}</option>
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
                            <option >{{ $dataKeluarga->rw }}</option>
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
                            <option >{{ $dataKeluarga->kelurahan }}</option>
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
                            <option >{{ $dataKeluarga->kecamatan }} </option>
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
                            <option >{{ $dataKeluarga->kabupaten_kota }}</option>
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
                            <option > {{ $dataKeluarga->provinsi }} </option>
                            @foreach ($dasawisma as $id)
                            <option value="{{$id->provinsi}}"> {{$id->provinsi}}</option>
                             @endforeach
                           </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>kepala rumah tangga:</strong>
                        <input type="number" min="0" name="kepala_rumah_tangga" value="{{ $dataKeluarga->kepala_rumah_tangga }}" class="form-control" placeholder="kepala_rumah_tangga">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>jumlah anggota keluarga:</strong>
                        <input type="number" min="0" name="jumlah_anggota_keluarga" value="{{ $dataKeluarga->jumlah_anggota_keluarga }}" class="form-control" placeholder="jumlah_anggota_keluarga">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>laki-laki:</strong>
                        <input type="number" min="0" name="laki_laki" value="{{ $dataKeluarga->laki_laki }}" class="form-control" placeholder="laki_laki">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>wanita:</strong>
                        <input type="number" min="0" name="wanita" value="{{ $dataKeluarga->wanita }}" class="form-control" placeholder="wanita">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>jumlah kepala keluarga:</strong>
                        <input type="number" min="0" name="jumlah_kepala_keluarga" value="{{ $dataKeluarga->jumlah_kepala_keluarga }}" class="form-control" placeholder="APA">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>balita:</strong>
                        <input type="number" min="0" name="balita" value="{{ $dataKeluarga->balita }}" class="form-control" placeholder="balita">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>pasangan usia subur:</strong>
                        <input type="number" min="0" name="pasangan_usia_subur" value="{{ $dataKeluarga->pasangan_usia_subur }}" class="form-control" placeholder="pasangan_usia_subur">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>wanita usia subur:</strong>
                        <input type="number" min="0" name="wanita_usia_subur" value="{{ $dataKeluarga->wanita_usia_subur }}" class="form-control" placeholder="wanita_usia_subur">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>buta:</strong>
                        <input type="number" min="0" name="buta" value="{{ $dataKeluarga->buta }}" class="form-control" placeholder="buta">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>ibu hamil:</strong>
                        <input type="number" min="0" name="ibu_hamil" value="{{ $dataKeluarga->ibu_hamil }}" class="form-control" placeholder="ibu_hamil">
                    </div>
                </div> 
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>ibu menyusui:</strong>
                        <input type="number" min="0" name="ibu_menyusui" value="{{ $dataKeluarga->ibu_menyusui }}" class="form-control" placeholder="ibu_menyusui">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>lansia:</strong>
                        <input type="number" min="0" name="lansia" value="{{ $dataKeluarga->lansia }}" class="form-control" placeholder="lansia">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>makanan pokok:</strong>
                        <input type="number" min="0" name="makanan_pokok" value="{{ $dataKeluarga->makanan_pokok }}" class="form-control" placeholder="makanan_pokok">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>jamban:</strong>
                        <input type="number" min="0" name="jamban" value="{{ $dataKeluarga->jamban }}" class="form-control" placeholder="jamban">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>tempat pembuangan sampah:</strong>
                        <input type="number" min="0" name="tempat_pembuangan_sampah" value="{{ $dataKeluarga->tempat_pembuangan_sampah }}" class="form-control" placeholder="tempat_pembuangan_sampah">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>saluran pembuangan air limbah:</strong>
                        <input type="number" min="0"  name="saluran_pembuangan_air_limbah" value="{{ $dataKeluarga->saluran_pembuangan_air_limbah }}" class="form-control" placeholder="saluran_pembuangan_air_limbah">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>stiker p4k:</strong>
                        <input type="text"   name="stiker_p4k" value="{{ $dataKeluarga->stiker_p4k }}" class="form-control" placeholder="stiker_p4k">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>kriteria rumah:</strong>
                        <input type="text"  name="kriteria_rumah" value="{{ $dataKeluarga->kriteria_rumah }}" class="form-control" placeholder="kriteria_rumah">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>up2k:</strong>
                        <input type="text"   name="up2k" value="{{ $dataKeluarga->up2k }}" class="form-control" placeholder="up2k">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>kegiatan usaha kesehatan lingkungan:</strong>
                        <input type="text"  name="kegiatan_usaha_kesehatan_lingkungan" value="{{ $dataKeluarga->kegiatan_usaha_kesehatan_lingkungan }}"  class="form-control" placeholder="kegiatan_usaha_kesehatan_lingkungan">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>keterangan:</strong>
                        <input type="text"   name="keterangan"  value="{{ $dataKeluarga->keterangan }}"  class="form-control" placeholder="keterangan">
                    </div>
                </div>
               
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </div>
          </div>


    </form>
@endsection