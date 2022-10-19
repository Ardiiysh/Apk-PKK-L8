@extends('layouts.layout')

 @section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> @section('title','Edit rekaptilulasiLahirMati')</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('rekaptilulasiLahirMatis.index') }}"> Back</a>
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

    <form action="{{ route('rekaptilulasiLahirMatis.update',$rekaptilulasiLahirMati->id_rekapitulasi_lahir_mati) }}" method="POST">
        @csrf
        @method('PUT')
<br>
        <div class="card">
            <div class="card-body">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>id rekapitulasi kelahiran kematian:</strong>
                        <input type="number" min="0" name="id_rekapitulasi_kelahiran_kematian" value="{{ $rekaptilulasiLahirMati->id_rekapitulasi_kelahiran_kematian }}" class="form-control" placeholder="id_rekapitulasi_kelahiran_kematian">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>id catatan diesnatalis:</strong>
                        <input type="number" min="0" name="id_catatan_diesnatalis" value="{{ $rekaptilulasiLahirMati->id_catatan_diesnatalis }}" class="form-control" placeholder="id_catatan_diesnatalis">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>id dasawisma:</strong>
                        <input type="number" min="0" name="id_dasawisma" value="{{ $rekaptilulasiLahirMati->id_dasawisma }}" class="form-control" placeholder="id_dasawisma">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Bulan:</strong>
                        <select class="form-control"  name="bulan" id="">
                            <option >{{ $rekaptilulasiLahirMati->bulan }}</option>
                            <option >--pilih--</option>
                            <option value="Januari">Januari</option>
                            <option value="Februari">Februari</option>
                            <option value="Maret">Maret</option>
                            <option value="April">April</option>
                            <option value="Mei">Mei</option>
                            <option value="Juni">Juni</option>
                            <option value="Juli">Juli</option>
                            <option value="Agustus">Agustus</option>
                            <option value="September">September</option>
                            <option value="Oktober">Oktober</option>
                            <option value="November">November</option>
                            <option value="Desember">Desember</option>
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Tahun:</strong>
                        <input type="text" name="tahun" value="{{ $rekaptilulasiLahirMati->tahun }}" class="form-control" placeholder="tahun">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Keterangan:</strong>
                        <input type="text" name="keterangan" value="{{ $rekaptilulasiLahirMati->keterangan }}" class="form-control" placeholder="0878xxxx">
                    </div>
                </div>
               
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </div>
          </div>


    </form>
@endsection