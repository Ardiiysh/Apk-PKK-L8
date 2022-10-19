@extends('layouts.layout')
@section('title', 'Warga')

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
                <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"
                    aria-expanded="false">
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
            <button type="button" href="{{ route('wargas.create') }}" class="btn btn-success" data-toggle="modal"
                data-target="#exampleModal">
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
                                    <input type="text" name="id_dasawisma" class="form-control"
                                        placeholder="id_dasawisam">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Kepala Rumah Tangga:</strong>
                                    <input type="text" name="kepala_rumah_tangga" class="form-control"
                                        placeholder="kepala_rumah_tangga">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>No Registrasi:</strong>
                                    <input type="number" min="0" name="no_registrasi" class="form-control"
                                        placeholder="no_registrasi">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>No KTP:</strong>
                                    <input type="number" min="0" name="no_ktp" class="form-control"
                                        placeholder="no_ktp">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Nama Lengkap:</strong>
                                    <input type="text" name="nama_lengkap" class="form-control"
                                        placeholder="nama_lengkap">
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
                                    <select type="text" name="jk" class="form-control" placeholder="jk">
                                        <option value="L">-- pilih Jenis Kelamin -- </option>
                                        <option value="L">Laki-Laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Tempat Lahir:</strong>
                                    <input type="text" name="tempat_lahir" class="form-control"
                                        placeholder="tempat_lahir">
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
                                    <input type="text" name="status_perkawinan" class="form-control"
                                        placeholder="status_perkawinan">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Status Dalam Keluarga:</strong>
                                    <input type="text" name="status_dalam_keluarga" class="form-control"
                                        placeholder="status_dalam_Keluarga">
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
                                    <input type="text" name="pendidikan" class="form-control"
                                        placeholder="pendidikan">
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
                                    <input type="text" name="akseptor_kb" class="form-control"
                                        placeholder="akseptor_kb">
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
                                    <input type="text" name="program_bina_keluarga_balita" class="form-control"
                                        placeholder="program_bina_keluarga_balita">
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
                                    <input type="text" name="kelompok_belajar" class="form-control"
                                        placeholder="kelompok_belajar">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>paud:</strong>
                                    <input type="text" name="paud" class="form-control" placeholder="paud">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>koperasi:</strong>
                                    <input type="text" name="koperasi" class="form-control" placeholder="koperasi">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Keterangan:</strong>
                                    <input type="text" name="keterangan" class="form-control"
                                        placeholder="keterangan">
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
    <div class="container">
        <table class="data-table display nowrap">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Dasawisma</th>
                    <th>Kepala Rumah Tangga</th>
                    <th>No Registrasi</th>
                    <th>No KTP</th>
                    <th>Nama Lengkap</th>
                    <th>Jabatan PKK</th>
                    <th>JK</th>
                    <th>Tempat Lahir</th>
                    <th>Tgl Lahir</th>
                    <th>Status Perkawinan</th>
                    <th>Status dalam Keluarga</th>
                    <th>Agama</th>
                    <th>Alamat</th>
                    <th>Pendidikan</th>
                    <th>Pekerjaan</th>
                    <th>Akseptor KB</th>
                    <th>Posyandu</th>
                    <th>Program Bina Keluarga Balita</th>
                    <th>Tabungan</th>
                    <th>Kelompok Belajar</th>
                    <th>Paud</th>
                    <th>Koperasi</th>
                    <th>Keterangan</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
        </table>
    </div>

@section('table')
    <script type="text/javascript">
        $(function() {

            var table = $('.data-table').DataTable({
                responsive: true,
                processing: true,
                serverSide: true,
                scrollX: true,
                ajax: "{{ route('wargas.index') }}",
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'id_dasawisma',
                        name: 'id_dasawisma'
                    },
                    {
                        data: 'kepala_rumah_tangga',
                        name: 'kepala_rumah_tangga'
                    },
                    {
                        data: 'no_registrasi',
                        name: 'no_registrasi'
                    },
                    {
                        data: 'no_ktp',
                        name: 'no_ktp'
                    },
                    {
                        data: 'nama_lengkap',
                        name: 'nama_lengkap'
                    },
                    {
                        data: 'jabatan_pkk',
                        name: 'jabatan_pkk'
                    },
                    {
                        data: 'jk',
                        name: 'jk'
                    },
                    {
                        data: 'tempat_lahir',
                        name: 'tempat_lahir'
                    },
                    {
                        data: 'tgl_lahir',
                        name: 'tgl_lahir'
                    },
                    {
                        data: 'status_perkawinan',
                        name: 'status_perkawinan'
                    },
                    {
                        data: 'status_dalam_keluarga',
                        name: 'status_dalam_keluarga'
                    },
                    {
                        data: 'agama',
                        name: 'agama'
                    },
                    {
                        data: 'alamat',
                        name: 'alamat'
                    },
                    {
                        data: 'pendidikan',
                        name: 'pendidikan'
                    },
                    {
                        data: 'pekerjaan',
                        name: 'pekerjaan'
                    },
                    {
                        data: 'akseptor_kb',
                        name: 'akseptor_kb'
                    },
                    {
                        data: 'posyandu',
                        name: 'posyandu'
                    },
                    {
                        data: 'program_bina_keluarga_balita',
                        name: 'program_bina_keluarga_balita'
                    },
                    {
                        data: 'tabungan',
                        name: 'tabungan'
                    },
                    {
                        data: 'kelompok_belajar',
                        name: 'kelompok_belajar'
                    },
                    {
                        data: 'paud',
                        name: 'paud'
                    },
                    {
                        data: 'koperasi',
                        name: 'koperasi'
                    },
                    {
                        data: 'keterangan',
                        name: 'keterangan'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ]
            });

        });
    </script>
@endsection

@endsection
