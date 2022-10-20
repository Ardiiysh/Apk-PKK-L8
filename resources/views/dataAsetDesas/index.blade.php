@extends('layouts.layout')
@section('title', 'Data Aset Desa')

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
                    <a class="dropdown-item" href="/dataAsetDesa">Excel</a>
                    <a class="dropdown-item" href="#">PDF</a>
                    <a class="dropdown-item" href="#">Word</a>
                </div>
            </div>

            {{-- <a href="/dataAsetDesa" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a> --}}




            <!-- Button trigger modal -->
            <button type="button" href="{{ route('dataAsetDesas.create') }}" class="btn btn-success" data-toggle="modal"
                data-target="#exampleModal">
                +
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Data Aset Desa</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{ route('dataAsetDesas.store') }}" method="POST">
                            @csrf

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>ID Data Aset:</strong>
                                    <input type="number" min="0" name="id_data_aset" class="form-control"
                                        placeholder="id_data_aset">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>id aset desa:</strong>
                                    <input type="number" min="0" name="id_aset_desa" class="form-control"
                                        placeholder="id_aset_desa">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>volume:</strong>
                                    <input type="text" name="volume" class="form-control" placeholder="volume">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>satuan:</strong>
                                    <input type="text" name="satuan" class="form-control" placeholder="satuan">
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
                    <th>ID Data Aset</th>
                    <th>ID Aset Desa</th>
                    <th>volume</th>
                    <th>satuan</th>
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
                ajax: "{{ route('dataAsetDesas.index') }}",
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'id_data_aset',
                        name: 'id_data_aset'
                    },
                    {
                        data: 'id_aset_desa',
                        name: 'id_aset_desa'
                    },
                    {
                        data: 'volume',
                        name: 'volume'
                    },
                    {
                        data: 'satuan',
                        name: 'satuan'
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
