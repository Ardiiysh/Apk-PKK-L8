@extends('layouts.layout')
@section('title', 'Catatan Diesnatalis')

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
            <!-- Button trigger modal -->
            <button type="button" href="{{ route('catatanDiesnataliss.create') }}" class="btn btn-success" data-toggle="modal"
                data-target="#exampleModal">
                +
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Catatan Diesnatalis</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{ route('catatanDiesnataliss.store') }}" method="POST">
                            @csrf
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Id Dasa Wisma:</strong>
                                    <input type="text" name="id_dasawisma" class="form-control"
                                        placeholder="Id Dasa Wisma">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>RT:</strong>
                                    <input type="text" name="rt" class="form-control" placeholder="RT">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>RW:</strong>
                                    <input type="text" name="rw" class="form-control" placeholder="RW">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Kelurahan:</strong>
                                    <input type="text" name="kelurahan" class="form-control" placeholder="Kelurahan">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Kecamatan:</strong>
                                    <input type="text" name="kecamatan" class="form-control" placeholder="Kecamatan">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Kabupaten/Kota:</strong>
                                    <input type="text" name="kabupaten_kota" class="form-control"
                                        placeholder="Kabupaten/Kota">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Provinsi:</strong>
                                    <input type="text" name="provinsi" class="form-control" placeholder="Provinsi">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Bulan:</strong>
                                    <input type="text" name="bulan" class="form-control" placeholder="Bulan">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Tahun:</strong>
                                    <input type="text" name="tahun" class="form-control" placeholder="Tahun">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Nama Ibu:</strong>
                                    <input type="text" name="nama_ibu" class="form-control" placeholder="Nama Ibu">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Nama Suami:</strong>
                                    <input type="text" name="nama_suami" class="form-control" placeholder="Nama Suami">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Nama Anak:</strong>
                                    <input type="text" name="nama_anak" class="form-control" placeholder="Nama Anak">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Status:</strong>
                                    <input type="text" name="status" class="form-control" placeholder="Status">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Jenkel:</strong>
                                    <input type="text" name="jenkel" class="form-control" placeholder="Jenkel">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>JK:</strong>
                                    <select class="form-control" name="jk" id="">
                                        <option>--Pilih--</option>
                                        <option value="L">L</option>
                                        <option value="P">P</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Tgl Lahir:</strong>
                                    <input type="date" name="tanggal" class="form-control" placeholder="Tgl Lahir">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Akta:</strong>
                                    <input type="text" name="akta" class="form-control" placeholder="Akta">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Sebab:</strong>
                                    <input type="text" name="sebab" class="form-control" placeholder="Sebab">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Keterangan:</strong>
                                    <input type="text" name="keterangan" class="form-control"
                                        placeholder="Keterangan">
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
    <div class="table-responsive">
        <table class="table table-bordered data-table nowrap">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Id Dasa Wisma</th>
                    <th>RT</th>
                    <th>RW</th>
                    <th>Kelurahan</th>
                    <th>Kecamatan</th>
                    <th>Kabupaten/Kota</th>
                    <th>Provinsi</th>
                    <th>Bulan</th>
                    <th>Tahun</th>
                    <th>Nama Ibu</th>
                    <th>Nama Suami</th>
                    <th>Nama Anak</th>
                    <th>Status</th>
                    <th>JK</th>
                    <th>Tanggal</th>
                    <th>Akta</th>
                    <th>Sebab</th>
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
                ajax: "{{ route('catatanDiesnataliss.index') }}",
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
                        data: 'rt',
                        name: 'rt'
                    },
                    {
                        data: 'rw',
                        name: 'rw'
                    },
                    {
                        data: 'kelurahan',
                        name: 'kelurahan'
                    },
                    {
                        data: 'kecamatan',
                        name: 'kecamatan'
                    },
                    {
                        data: 'kabupaten_kota',
                        name: 'kabupaten_kota'
                    },
                    {
                        data: 'provinsi',
                        name: 'provinsi'
                    },
                    {
                        data: 'bulan',
                        name: 'bulan'
                    },
                    {
                        data: 'tahun',
                        name: 'tahun'
                    },
                    {
                        data: 'nama_ibu',
                        name: 'nama_ibu'
                    },
                    {
                        data: 'nama_suami',
                        name: 'nama_suami'
                    },
                    {
                        data: 'nama_anak',
                        name: 'nama_anak'
                    },
                    {
                        data: 'status',
                        name: 'status'
                    },
                    {
                        data: 'jenkel',
                        name: 'jenkel'
                    },
                    {
                        data: 'tanggal',
                        name: 'tanggal'
                    },
                    {
                        data: 'akta',
                        name: 'akta'
                    },
                    {
                        data: 'sebab',
                        name: 'sebab'
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
