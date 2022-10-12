@extends('layouts.layout')

 @section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> @section('title','Edit warga')</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('wargas.index') }}"> Back</a>
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

    <form action="{{ route('wargas.update',$warga->id_warga) }}" method="POST">
        @csrf
        @method('PUT')
<br>
        <div class="card">
            <div class="card-body">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>ID Dasawisma:</strong>
                        <input type="text" name="id_dasawisma"  value="{{ $warga->id_dasawisma }}" class="form-control" placeholder="id_dasawisam">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Kepala Rumah Tangga:</strong>
                        <input type="text"  name="kepala_rumah_tangga" value="{{ $warga->kepala_rumah_tangga }}" class="form-control" placeholder="kepala_rumah_tangga">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>No Registrasi:</strong>
                        <input type="text" name="no_registrasi"  value="{{ $warga->no_registrasi }}" class="form-control" placeholder="No Registrasi">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>No KTP:</strong>
                        <input type="number" min="0" name="no_ktp" value="{{ $warga->no_ktp }}"  class="form-control" placeholder="no_ktp">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nama Lengkap:</strong>
                        <input type="text" name="nama_lengkap" value="{{ $warga->nama_lengkap }}" class="form-control" placeholder="nama_lengkap">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Jabatan PKK:</strong>
                        <input type="text" name="jabatan_pkk" value="{{ $warga->jabatan_pkk }} " class="form-control" placeholder="jabatan_pkk">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>jk:</strong>
                        <select type="text" name="jk"  value="{{ $warga->jk }}"  class="form-control" placeholder="jk">
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Tempat Lahir:</strong>
                        <input type="text" name="tempat_lahir" value="{{ $warga->tempat_lahir }}"  class="form-control" placeholder="tempat_lahir">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Tanggal Lahir:</strong>
                        <input type="date" name="tgl_lahir" value="{{ $warga->tgl_lahir }}"  class="form-control" placeholder="tgl_lahir">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Status Perkawinan:</strong>
                        <input type="text" name="status_perkawinan" value="{{ $warga->status_perkawinan }} " class="form-control" placeholder="status_perkawinan">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Status Dalam Keluarga:</strong>
                        <input type="text" name="status_dalam_Keluarga" value="{{ $warga->status_dalam_keluarga }}"  class="form-control" placeholder="status_dalam_Keluarga">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Agama:</strong>
                        <input type="text" name="agama" value="{{ $warga->agama }}"  class="form-control" placeholder="agama">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Alamat:</strong>
                        <input type="text" name="alamat" value="{{ $warga->alamat }}"  class="form-control" placeholder="alamat">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>pendidikan:</strong>
                        <input type="text" name="pendidikan" value="{{ $warga->pendidikan }}"  class="form-control" placeholder="pendidikan">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>pekerjaan:</strong>
                        <input type="text" name="pekerjaan" value="{{ $warga->pekerjaan }}"  class="form-control" placeholder="pekerjaan">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Akseptor kb:</strong>
                        <input type="text" name="akseptor_kb" value="{{ $warga->akseptor_kb }}"  class="form-control" placeholder="akseptor_kb">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>posyandu:</strong>
                        <input type="text" name="posyandu" value="{{ $warga->posyandu }}"  class="form-control" placeholder="posyandu">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Program Bina Keluarga Balita:</strong>
                        <input type="text" name="program_bina_keluarga_balita" value="{{ $warga->program_bina_keluarga_balita }}"  class="form-control" placeholder="program_bina_keluarga_balita">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Tabungan:</strong>
                        <input type="text" name="tabungan" value="{{ $warga->tabungan }}"  class="form-control" placeholder="tabungan">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>kelompok Belajar:</strong>
                        <input type="text" name="kelompok_belajar" value="{{ $warga->kelompok_belajar }}"  class="form-control" placeholder="kelompok_belajar">
                    </div>
                </div> <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>paud:</strong>
                        <input type="text" name="paud" value="{{ $warga->paud }}"  class="form-control" placeholder="paud">
                    </div>
                </div> <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>koperasi:</strong> 
                        <input type="text" name="koperasi" value="{{ $warga->koperasi }}"  class="form-control" placeholder="koperasi">
                    </div>
                </div> <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Keterangan:</strong>
                        <input type="text" name="keterangan" value="{{ $warga->keterangan }}"  class="form-control" placeholder="keterangan">
                    </div>
                </div>
               
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </div>
          </div>


    </form>
@endsection