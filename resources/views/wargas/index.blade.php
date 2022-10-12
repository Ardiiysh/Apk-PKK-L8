@extends('layouts.layout')
 @section('title','Warga')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
                       
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

<!-- Example split danger button -->
<div class="btn-group">
    <button type="button" class="btn btn-info">Unduh</button>
    <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-expanded="false">
      <span class="sr-only">Toggle Dropdown</span>
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="/warga">Excel</a>
      <a class="dropdown-item" href="#">PDF</a>
      <a class="dropdown-item" href="#">Word</a>
    </div>
  </div>

        {{-- <a href="/warga" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a> --}}




            <!-- Button trigger modal -->
            <button type="button"  href="{{ route('wargas.create') }}" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                +
            </button>
            
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">warga</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <form action="{{ route('wargas.store') }}" method="POST">
                        @csrf

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>ID Dasawisma:</strong>
                                <input type="text" name="id_dasawisma" class="form-control" placeholder="id_dasawisam">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Kepala Rumah Tangga:</strong>
                                <input type="text"  name="kepala_rumah_tangga" class="form-control" placeholder="kepala_rumah_tangga">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>No Registrasi:</strong>
                                <input type="number" min="0" name="no_registrasi" class="form-control" placeholder="no_registrasi">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>No KTP:</strong>
                                <input type="number" min="0" name="no_ktp" class="form-control" placeholder="no_ktp">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Nama Lengkap:</strong>
                                <input type="text" name="nama_lengkap" class="form-control" placeholder="nama_lengkap">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Jabatan PKK:</strong>
                                <input type="text" name="jabatan_pkk" class="form-control" placeholder="jabatan_pkk">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>jk:</strong>
                                <select  type="text" name="jk" class="form-control" placeholder="jk">
                                <option value="L">-- pilih Jenis Kelamin --  </option>
                                <option value="L">Laki-Laki</option>
                                <option value="P">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Tempat Lahir:</strong>
                                <input type="text" name="tempat_lahir" class="form-control" placeholder="tempat_lahir">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Tanggal Lahir:</strong>
                                <input type="date" name="tgl_lahir" class="form-control" placeholder="tgl_lahir">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Status Perkawinan:</strong>
                                <input type="text" name="status_perkawinan" class="form-control" placeholder="status_perkawinan">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Status Dalam Keluarga:</strong>
                                <input type="text" name="status_dalam_keluarga" class="form-control" placeholder="status_dalam_Keluarga">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Agama:</strong>
                                <input type="text" name="agama" class="form-control" placeholder="agama">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Alamat:</strong>
                                <input type="text" name="alamat" class="form-control" placeholder="alamat">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>pendidikan:</strong>
                                <input type="text" name="pendidikan" class="form-control" placeholder="pendidikan">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>pekerjaan:</strong>
                                <input type="text" name="pekerjaan" class="form-control" placeholder="pekerjaan">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Akseptor kb:</strong>
                                <input type="text" name="akseptor_kb" class="form-control" placeholder="akseptor_kb">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>posyandu:</strong>
                                <input type="text" name="posyandu" class="form-control" placeholder="posyandu">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Program Bina Keluarga Balita:</strong>
                                <input type="text" name="program_bina_keluarga_balita" class="form-control" placeholder="program_bina_keluarga_balita">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Tabungan:</strong>
                                <input type="text" name="tabungan" class="form-control" placeholder="tabungan">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>kelompok Belajar:</strong>
                                <input type="text" name="kelompok_belajar" class="form-control" placeholder="kelompok_belajar">
                            </div>
                        </div> <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>paud:</strong>
                                <input type="text" name="paud" class="form-control" placeholder="paud">
                            </div>
                        </div> <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>koperasi:</strong>
                                <input type="text" name="koperasi" class="form-control" placeholder="koperasi">
                            </div>
                        </div> <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Keterangan:</strong>
                                <input type="text" name="keterangan" class="form-control" placeholder="keterangan">
                            </div>
                        </div>
                           
                                            
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                                            
                            </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
   <br>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <br>
    <table class="table table-bordered ">
        <thead>
        <tr>
            <th>No</th>
            <th>ID Dasawisma</th>
            <th>kepala rumah tangga</th>
            <th>no registrasi</th>
            <th>no ktp</th>
            <th>nama lengkap</th>
            <th>jabatan pkk</th>
            <th>jk</th>
            <th>tempat lahir</th>
            <th>tgl lahir</th>
            <th>status perkawinan</th>
            <th>status dalam keluarga</th>
            <th>agama</th>
            <th>alamat</th>
            <th>pendidikan</th>
            <th>pekerjaan</th>
            <th>akseptor kb</th>
            <th>posyandu</th>
            <th>program bina keluarga balita</th>
            <th>tabungan</th>
            <th>kelompok belajar</th>
            <th>paud</th>
            <th>koperasi</th>
            <th>keterangan</th>
            <th width="280px">Action</th>
        </tr>
    </thead>
         @php
        $i = 0;
        @endphp
        @foreach ($wargas as $warga)
        <tr>


            <th>{{ ++$i }}</td>
            <td>{{ $warga->id_dasawisma}}</td>
            <td>{{ $warga->kepala_rumah_tangga}}</td>
            <td>{{ $warga->no_registrasi}}</td>
            <td>{{ $warga->no_ktp}}</td>
            <td>{{ $warga->nama_lengkap}}</td>
            <td>{{ $warga->jabatan_pkk}}</td>
            <td>{{ $warga->jk}}</td>
            <td>{{ $warga->tempat_lahir}}</td>
            <td>{{ $warga->tgl_lahir}}</td>
            <td>{{ $warga->status_perkawinan}}</td>
            <td>{{ $warga->status_dalam_keluarga}}</td>
            <td>{{ $warga->agama}}</td>
            <td>{{ $warga->alamat}}</td>
            <td>{{ $warga->pendidikan}}</td>
            <td>{{ $warga->pekerjaan}}</td>
            <td>{{ $warga->akseptor_kb}}</td>
            <td>{{ $warga->posyandu}}</td>
            <td>{{ $warga->program_bina_keluarga_balita}}</td>
            <td>{{ $warga->tabungan}}</td>
            <td>{{ $warga->kelompok_belajar}}</td>
            <td>{{ $warga->paud}}</td>
            <td>{{ $warga->koperasi}}</td>
            <td>{{ $warga->keterangan}}</td>
            <td>
                <form onsubmit="return confirm('Apakah anda yakin ingin menghapus {{$warga->kepala_rumah_tangga}} ?');"  action="{{ route('wargas.destroy',$warga->id_warga) }}" method="POST">

                    {{-- <a class="btn btn-info" href="{{ route('wargas.show',$warga->id) }}">Show</a> --}}
    
                    <a class="btn btn-primary" href="{{ route('wargas.edit',$warga->id_warga) }}" ><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                      </svg></a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                      </svg></button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

      
@endsection