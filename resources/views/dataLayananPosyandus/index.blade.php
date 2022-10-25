@extends('layouts.layout')
@section('title', 'dataLayananPosyandu')

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
                    <a class="dropdown-item" href="/dataLayananPosyandu">Excel</a>
                    <a class="dropdown-item" href="#">PDF</a>
                    <a class="dropdown-item" href="#">Word</a>
                </div>
            </div>

            <!-- Button trigger modal -->
            <button type="button" href="{{ route('dataLayananPosyandus.create') }}" class="btn btn-success" data-toggle="modal"
                data-target="#exampleModal">
                +
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">dataLayananPosyandu</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{ route('dataLayananPosyandus.store') }}" method="POST">
                            @csrf
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>id data posyandu:</strong>
                                    <input type="number" min="0" name="id_data_posyandu" class="form-control" placeholder="id_data_posyandu">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>id layanan posyandu:</strong>
                                    <input type="number" min="0" name="id_layanan_posyandu" class="form-control" placeholder="id_layanan_posyandu">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>frekuensi layanan:</strong>
                                    <input type="number" min="0" name="frekuensi_layanan" class="form-control" placeholder="frekuensi_layanan">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>pengunjung laki laki:</strong>
                                    <input type="number" min="0" name="pengunjung_laki_laki" class="form-control" placeholder="pengunjung_laki_laki">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>pengunjung perempuan:</strong>
                                    <input type="number" min="0" name="pengunjung_perempuan" class="form-control" placeholder="pengunjung_perempuan">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>paramedis laki Laki:</strong>
                                    <input ttype="number" min="0" name="paramedis_laki_Laki" class="form-control" placeholder="paramedis_laki_Laki">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>paramedis perempuan:</strong>
                                    <input type="number" min="0" name="paramedis_perempuan" class="form-control" placeholder="paramedis_perempuan">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Keterangan:</strong>
                                    <input type="number" min="0" name="keterangan" class="form-control" placeholder="keterangan">
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
                    <th>id data posyandu </th>
                    <th>id layanan posyandu </th>
                    <th>frekuensi layanan </th>
                    <th>pengunjung laki laki </th>
                    <th>pengunjung perempuan </th>
                    <th>paramedis laki Laki </th>
                    <th>paramedis perempuan </th>
                    <th>keterangan </th>
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
                ajax: "{{ route('dataLayananPosyandus.index') }}",
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'id_data_posyandu',
                        name: 'id_data_posyandu'
                    },
                    {
                        data: 'id_layanan_posyandu',
                        name: 'id_layanan_posyandu'
                    },
                    {
                        data: 'frekuensi_layanan',
                        name: 'frekuensi_layanan'
                    },
                    {
                        data: 'pengunjung_laki_laki',
                        name: 'pengunjung_laki_laki'
                    },
                    {
                        data: 'pengunjung_perempuan',
                        name: 'pengunjung_perempuan'
                    },
                    {
                        data: 'paramedis_laki_Laki',
                        name: 'paramedis_laki_Laki'
                    },
                    {
                        data: 'paramedis_perempuan',
                        name: 'paramedis_perempuan'
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
