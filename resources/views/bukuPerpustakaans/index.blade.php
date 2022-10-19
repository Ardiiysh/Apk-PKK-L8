@extends('layouts.layout')
@section('title', 'Buku Perpustakaan')

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
                <a class="dropdown-item" href="/buku">Excel</a>
                <a class="dropdown-item" href="#">PDF</a>
                <a class="dropdown-item" href="#">Word</a>
                </div>
            </div>

            <!-- Button trigger modal -->
            <button type="button" href="{{ route('bukuPerpustakaans.create') }}" class="btn btn-success" data-toggle="modal"
                data-target="#exampleModal">
                +
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Buku Perpustakaan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{ route('bukuPerpustakaans.store') }}" method="POST">
                            @csrf
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Id Perpustakaan:</strong>
                                    <input type="text" name="id_perpustakaan" class="form-control" placeholder="Id Perpustakaan">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Id Buku:</strong>
                                    <input type="text" name="id_buku" class="form-control" placeholder="Id Buku">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Jumlah:</strong>
                                    <input type="text" name="jumlah" class="form-control" placeholder="Jumlah">
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
                    <th>Id Perpustakaan</th>
                    <th>Id Buku</th>
                    <th>Jumlah</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
        </table>
    </div>

    @section('table')
        <script type="text/javascript">
             $(function () {

                var table = $('.data-table').DataTable({
                    responsive: true,
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('bukuPerpustakaans.index') }}",
                    columns: [
                        {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
                        {data: 'id_perpustakaan', name: 'id_perpustakaan'},
                        {data: 'id_buku', name: 'id_buku'},
                        {data: 'jumlah', name: 'jumlah'},
                        {data: 'action', name: 'action', orderable: false, searchable: false},
                    ]
                });

            });
        </script>
    @endsection


@endsection
