@extends('layouts.layout')
 @section('title','catatan Keluarga')

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
      <a class="dropdown-item" href="/catatanKeluarga">Excel</a>
      <a class="dropdown-item" href="#">PDF</a>
      <a class="dropdown-item" href="#">Word</a>
    </div>
  </div>

        {{-- <a href="/catatanKeluarga" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a> --}}




            <!-- Button trigger modal -->
            <button type="button"  href="{{ route('catatanKeluargas.create') }}" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                +
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">catatanKeluarga</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <form action="{{ route('catatanKeluargas.store') }}" method="POST">
                        @csrf
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Kepala Rumah Tangga:</strong>
                                <input type="text" name="kepala_rumah_tangga" class="form-control" placeholder="kepala_rumah_tangga">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Id Dasawisma:</strong>
                                <input type="number" min="0" name="id_dasawisma" class="form-control" placeholder="id_dasawisma">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Tahun:</strong>
                                <input type="number" min="0" name="tahun" class="form-control" placeholder="tahun">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Kriteria Rumah:</strong>
                                <input type="text" name="kriteria_rumah" class="form-control" placeholder="kriteria_rumah">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Jamban:</strong>
                                <input type="text" name="jamban" class="form-control" placeholder="jamban">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Jumlah Jamban:</strong>
                                <input type="number" min="0" name="jumlah_jamban" class="form-control" placeholder="jumlah_jamban">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Sumber Air:</strong>
                                <input type="text" name="sumber_air" class="form-control" placeholder="sumber_air">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Tempat Sampah:</strong>
                                <input type="text" name="tempat_sampah" class="form-control" placeholder="tempat_sampah">
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
    <table class="table table-bordered data-table">
        <thead>
            <tr>
                <th>id catatan keluarga</th>
                <th>kepala rumah tangga</th>
                <th>id dasawisma</th>
                <th>tahun</th>
                <th>kriteria rumah</th>
                <th>jamban</th>
                <th>jumlah jamban</th>
                <th>sumber air</th>
                <th>tempat sampah</th>
                <th>keterangan</th>

                <th width="280px">Action</th>
            </tr>
        </thead>
    </table>

    @section('table')
        <script type="text/javascript">
             $(function () {

                var table = $('.data-table').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('catatanKeluargas.index') }}",
                    scrollX: 200,
                    deferRender: true,
                    scroller: true,
                    columns: [
                        {data: 'id_catatan_keluarga', name: 'id_catatan_keluarga'},
                        {data: 'kepala_rumah_tangga', name: 'kepala_rumah_tangga'},
                        {data: 'id_dasawisma', name: 'id_dasawisma'},
                        {data: 'tahun', name: 'tahun'},
                        {data: 'kriteria_rumah', name: 'kriteria_rumah'},
                        {data: 'jamban', name: 'jamban'},
                        {data: 'jumlah_jamban', name: 'jumlah_jamban'},
                        {data: 'sumber_air', name: 'sumber_air'},
                        {data: 'tempat_sampah', name: 'tempat_sampah'},
                        {data: 'keterangan', name: 'keterangan'},
                        {data: 'action', name: 'action', orderable: false, searchable: false},
                    ]
                });

            });
        </script>
    @endsection

@endsection
