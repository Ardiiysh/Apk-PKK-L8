@extends('layouts.layout')
@section('title', 'Kegiatan Warga')

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
                    <a class="dropdown-item" href="/kegiatanWarga">Excel</a>
                    <a class="dropdown-item" href="#">PDF</a>
                    <a class="dropdown-item" href="#">Word</a>
                </div>
            </div>

            <!-- Button trigger modal -->
            <button type="button" href="{{ route('kegiatanWargas.create') }}" class="btn btn-success" data-toggle="modal"
                data-target="#exampleModal">
                +
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">kegiatan warga</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{ route('kegiatanWargas.store') }}" method="POST">
                            @csrf
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>ID Warga:</strong>
                                    <input type="text" name="id_warga" class="form-control" placeholder="ID Warga">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>p4:</strong>
                                    <input type="text" name="p4" class="form-control" placeholder="kriteria Kader">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>kerjabakti:</strong>
                                    <input type="text" name="kerjabakti" class="form-control" placeholder="kerjabakti">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>rukun_kematian:</strong>
                                    <input type="text" name="rukun_kematian" class="form-control"
                                        placeholder="rukun_kematian">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>keagamaan:</strong>
                                    <input type="text" name="keagamaan" class="form-control" placeholder="keagamaan">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>jimpitan:</strong>
                                    <input type="text" name="jimpitan" class="form-control" placeholder="jimpitan">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>arisan:</strong>
                                    <input type="text" name="arisan" class="form-control" placeholder="arisan">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>lainnya:</strong>
                                    <input type="text" name="lainnya" class="form-control" placeholder="lainnya">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
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
    <div class="table table-responsive w-100 d-block d-xxl-table">
        <table class="table table-bordered data-table nowrap">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Warga</th>
                    <th>P4</th>
                    <th>Kerja Bakti</th>
                    <th>Rukun Kematian</th>
                    <th>Keagamaan</th>
                    <th>Jimpitan</th>
                    <th>Arisan</th>
                    <th>Lainnya</th>
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
                ajax: "{{ route('kegiatanWargas.index') }}",
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'id_warga',
                        name: 'id_warga'
                    },
                    {
                        data: 'p4',
                        name: 'p4'
                    },
                    {
                        data: 'kerjabakti',
                        name: 'kerjabakti'
                    },
                    {
                        data: 'rukun_kematian',
                        name: 'rukun_kematian'
                    },
                    {
                        data: 'keagamaan',
                        name: 'keagamaan'
                    },
                    {
                        data: 'jimpitan',
                        name: 'jimpitan'
                    },
                    {
                        data: 'arisan',
                        name: 'arisan'
                    },
                    {
                        data: 'lainnya',
                        name: 'lainnya'
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
