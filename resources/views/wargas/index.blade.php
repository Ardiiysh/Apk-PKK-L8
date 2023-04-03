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
                <button type="button" class="btn btn-info"><i class="fas fa-download"></i></button>

                <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"
                    aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="/warga">Excel</a>
                    <a class="dropdown-item" href="/warga-pdf">PDF</a>
                    {{-- <a class="dropdown-item" href="#">Word</a> --}}
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
                            <h5 class="modal-title" id="exampleModalLabel">Warga</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{ route('wargas.store') }}" method="POST">
                            @csrf

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>ID Dasawisma:</strong>
                                    <input type="number" min="1" name="id_dasawisma" class="form-control"
                                        placeholder="Id Dasawisma">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Kepala Rumah Tangga:</strong>
                                    <input type="text" name="Kepala Rumah Tangga" class="form-control"
                                        placeholder="Kepala Rumah Tangga">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>No Registrasi:</strong>
                                    <input type="number" min="1" name="no_registrasi" class="form-control"
                                        placeholder="No Registrasi">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>No KTP:</strong>
                                    <input type="text" pattern="^[+]?\d+([.]\d+)?$" name="no_ktp"
                                        class="form-control" placeholder="(Maks 16)">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Nama Lengkap:</strong>
                                    <input type="text" name="nama_lengkap" class="form-control"
                                        placeholder="Nama Lengkap">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Jabatan PKK:</strong>
                                    <input type="text" name="jabatan_pkk" class="form-control" placeholder="Jabatan PKK">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>JK:</strong>
                                    <select type="text" name="jk" class="form-control" placeholder="jk">
                                        <option value="L">-- Pilih Jenis Kelamin -- </option>
                                        <option value="L">Laki-Laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Tempat Lahir:</strong>
                                    <input type="text" name="tempat_lahir" class="form-control"
                                        placeholder="Tempat Lahir">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Tanggal Lahir:</strong>
                                    <input type="date" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Status Perkawinan:</strong>
                                    <select type="text" name="status_perkawinan" class="form-control"
                                        placeholder="Status Perkawinan">
                                        <option value="">-- Pilih Status Perkawinan -- </option>
                                        <option value="Kawin">Kawin</option>
                                        <option value="Belum Kawin">Belum Kawin</option>
                                        <option value="Cerai Hidup">Cerai Hidup</option>
                                        <option value="Cerai Mati">Cerai Mati</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Status Dalam Keluarga:</strong>
                                    <input type="text" name="status_dalam_keluarga" class="form-control"
                                        placeholder="Status Dala Keluarga">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Agama:</strong>
                                    <select type="text" name="agama" class="form-control" placeholder="Agama">
                                        <option value="">-- Pilih Agama -- </option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Konghucu">Konghucu</option>
                                        <option value="Kepercayaan Lainnya">Kepercayaan Lainnya</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Alamat:</strong>
                                    <textarea name="alamat" class="form-control" placeholder="Alamat" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Pendidikan:</strong>
                                    <input type="text" name="pendidikan" class="form-control"
                                        placeholder="Pendidikan">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Pekerjaan:</strong>
                                    <select type="text" name="pekerjaan" class="form-control" placeholder="Pekerjaan">
                                        <option value="">-- Pilih Pekerjaan --</option>
                                        @foreach ($pekerjaans as $p)
                                            <option value="{{ $p->nama_pekerjaan }}">{{ $p->nama_pekerjaan }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Akseptor KB:</strong>
                                    <input type="text" name="akseptor_kb" class="form-control"
                                        placeholder="Akseptor KB">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Posyandu:</strong>
                                    <input type="text" name="posyandu" class="form-control" placeholder="Posyandu">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Program Bina Keluarga Balita:</strong>
                                    <input type="text" name="program_bina_keluarga_balita" class="form-control"
                                        placeholder="Program Bina Keluarga Balita">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Tabungan:</strong>
                                    <input type="text" name="tabungan" class="form-control" placeholder="Tabungan">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>kelompok Belajar:</strong>
                                    <input type="text" name="kelompok_belajar" class="form-control"
                                        placeholder="Kelompok Belajar">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Paud:</strong>
                                    <input type="text" name="paud" class="form-control" placeholder="Paud">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Koperasi:</strong>
                                    <input type="text" name="koperasi" class="form-control" placeholder="Koperasi">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Keterangan:</strong>
                                    <textarea name="keterangan" class="form-control" placeholder="Keterangan" cols="30" rows="10"></textarea>
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
        <table class="data-table display nowrap" style="width: 100%">
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
