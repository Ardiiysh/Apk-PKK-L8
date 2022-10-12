@extends('layouts.layout')

 @section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> @section('title','Edit Kegiatan Warga')</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('kegiatanWargas.index') }}"> Back</a>
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

    <form action="{{ route('kegiatanWargas.update',$kegiatanWarga->id_kegiatan_warga) }}" method="POST">
        @csrf
        @method('PUT')
<br>
        <div class="card">
            <div class="card-body">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>ID Warga:</strong>
                        <input type="text" name="id_warga" value="{{ $kegiatanWarga->id_warga }}" class="form-control" placeholder="Nama kegiatanWarga">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>P4:</strong>
                        <input type="text" name="p4" value="{{ $kegiatanWarga->p4 }}" class="form-control" placeholder="p4">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>kerjabakti:</strong>
                        <input type="text" name="kerjabakti" value="{{ $kegiatanWarga->kerjabakti }}" class="form-control" placeholder="0878xxxx">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>rukun_kematian:</strong>
                        <input type="text" name="rukun_kematian" value="{{ $kegiatanWarga->rukun_kematian }}" class="form-control" placeholder="0878xxxx">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>keagamaan:</strong>
                        <input type="text" name="keagamaan" value="{{ $kegiatanWarga->keagamaan }}" class="form-control" placeholder="0878xxxx">
                    </div>
                </div>  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>jimpitan:</strong>
                        <input type="text" name="jimpitan" value="{{ $kegiatanWarga->jimpitan }}" class="form-control" placeholder="0878xxxx">
                    </div>
                </div>  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>arisan:</strong>
                        <input type="text" name="arisan" value="{{ $kegiatanWarga->arisan }}" class="form-control" placeholder="0878xxxx">
                    </div>
                </div>  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>lainnya:</strong>
                        <input type="text" name="lainnya" value="{{ $kegiatanWarga->lainnya }}" class="form-control" placeholder="0878xxxx">
                    </div>
                </div>  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>keterangan:</strong>
                        <input type="text" name="keterangan" value="{{ $kegiatanWarga->keterangan }}" class="form-control" placeholder="0878xxxx">
                    </div>
                </div>

               
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </div>
          </div>


    </form>
@endsection