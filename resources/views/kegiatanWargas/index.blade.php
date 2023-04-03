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
                <button type="button" class="btn btn-info"><i class="fas fa-download"></i></button>

                <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"
                    aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="/kegiatanWarga">Excel</a>
                    <a class="dropdown-item" href="/kegiatanWarga-pdf">PDF</a>
                    {{-- <a class="dropdown-item" href="#">Word</a> --}}
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
                            <h5 class="modal-title" id="exampleModalLabel">Kegiatan Warga</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{ route('kegiatanWargas.store') }}" method="POST">
                            @csrf
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>ID Warga:</strong>
                                    <input type="number" min="1" name="id_warga" class="form-control" placeholder="ID Warga">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>P4:</strong>
                                    <input type="text" name="p4" class="form-control" placeholder="P4">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Kerja Bakti:</strong>
                                    <input type="text" name="kerjabakti" class="form-control" placeholder="Kerja Bakti">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Rukun Kematian:</strong>
                                    <input type="text" name="rukun_kematian" class="form-control"
                                        placeholder="Rukun Kematian">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Keagamaan:</strong>
                                    <input type="text" name="keagamaan" class="form-control" placeholder="Keagamaan">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Jimpitan:</strong>
                                    <input type="text" name="jimpitan" class="form-control" placeholder="Jimpitan">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Arisan:</strong>
                                    <input type="text" name="arisan" class="form-control" placeholder="Arisan">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Lainnya:</strong>
                                    <input type="text" name="lainnya" class="form-control" placeholder="Lainnya">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Keterangan:</strong>
                                    <input type="text" name="keterangan" class="form-control" placeholder="Keterangan">
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
                scrollX: true,
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

        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });

        $(document).ready(function () {
            $('#pekerjaan').on('click',function(e) {
                var code = $(this).val();
                $.ajax({
                url:"{{ route('getCOA') }}",
                type:"GET",
                dataType: "json",
                success:function (data) {
                    $.each(data.data, function(key, item) {
                        $('#container').empty();
                        $('#container').append('<input type="text" id="name" name="name" class="form-control" placeholder="Name" value="'+ item.name +'" readonly>')
                    })
                }
                })
            });
        });
    </script>
@endsection


@endsection
