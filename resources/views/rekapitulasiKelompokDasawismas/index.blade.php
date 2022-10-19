@extends('layouts.layout')
 @section('title','Rekapitulasi Kelompok Dasawisma')

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
      <a class="dropdown-item" href="/rekapitulasiKelompokDasawisma">Excel</a>
      <a class="dropdown-item" href="#">PDF</a>
      <a class="dropdown-item" href="#">Word</a>
    </div>
  </div>

        {{-- <a href="/rekapitulasiKelompokDasawisma" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a> --}}




            <!-- Button trigger modal -->
            <button type="button"  href="{{ route('rekapitulasiKelompokDasawismas.create') }}" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                +
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">rekapitulasiKelompokDasawisma</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <form action="{{ route('rekapitulasiKelompokDasawismas.store') }}" method="POST">
                        @csrf

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>ID dasawisma:</strong>
                                <input type="text" name="id_dasawisma" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>RT:</strong>
                                <input type="number" min="0" name="rt" class="form-control" placeholder="">
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>RW:</strong>
                                <input type="number" min="0" name="rw" class="form-control" placeholder="">
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>kelurahan:</strong>
                                <input type="text" name="kelurahan" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>kecamatan:</strong>
                                <input type="text" name="kecamatan" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>kabupaten_kota:</strong>
                                <input type="text" name="kabupaten_kota" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>provinsi:</strong>
                                <input type="text" name="provinsi" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Tahun:</strong>
                                <input type="number" min="0" name="tahun" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Keterangan:</strong>
                                <input type="text" name="keterangan" class="form-control" placeholder="">
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
                    <th>ID Dasawisma</th>
                    <th>RT</th>
                    <th>RW</th>
                    <th>Kelurahan</th>
                    <th>Kecamatan</th>
                    <th>kabupaten/Kota</th>
                    <th>Provinsi</th>
                    <th>Tahun</th>
                    <th>keterangan</th>
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
                    ajax: "{{ route('rekapitulasiKelompokDasawismas.index') }}",
                    columns: [
                        {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
                        {data: 'jenis_buku', name: 'jenis_buku'},
                        {data: 'kategori', name: 'kategori'},
                        {data: 'keterangan', name: 'keterangan'},
                        {data: 'keterangan', name: 'keterangan'},
                        {data: 'keterangan', name: 'keterangan'},
                        {data: 'keterangan', name: 'keterangan'},
                        {data: 'action', name: 'action', orderable: false, searchable: false},
                    ]
                });

            });
        </script>
    @endsection

@endsection
