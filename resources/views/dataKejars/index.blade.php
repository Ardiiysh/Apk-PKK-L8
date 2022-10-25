@extends('layouts.layout')
 @section('title','dataKejar')

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

    <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-expanded="false">
      <span class="sr-only">Toggle Dropdown</span>
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="/dataKejar">Excel</a>
      <a class="dropdown-item" href="#">PDF</a>
      <a class="dropdown-item" href="#">Word</a>
    </div>
  </div>

        {{-- <a href="/dataKejar" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a> --}}




            <!-- Button trigger modal -->
            <button type="button"  href="{{ route('dataKejars.create') }}" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                +
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">dataKejar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <form action="{{ route('dataKejars.store') }}" method="POST">
                        @csrf
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>id data kelompok belajar:</strong>
                                <input type="number" min="0" name="id_data_kelompok_belajar" class="form-control" placeholder="id_data_kelompok_belajar">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>id kelompok belajar:</strong>
                                <input type="number" min="0" name="id_kelompok_belajar" class="form-control" placeholder="id_kelompok_belajar">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>jumlah siswa laki laki:</strong>
                                <input type="number" min="0" name="jumlah_siswa_laki_laki" class="form-control" placeholder="jumlah_siswa_laki_laki">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>jumlah siswa perempuan:</strong>
                                <input type="number" min="0" name="jumlah_siswa_perempuan" class="form-control" placeholder="jumlah_siswa_perempuan">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>jumlah pengajar laki laki:</strong>
                                <input type="number" min="0" name="jumlah_pengajar_laki_laki" class="form-control" placeholder="jumlah_pengajar_laki_laki">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>jumlah pengajar perempuan:</strong>
                                <input ttype="number" min="0" name="jumlah_pengajar_perempuan" class="form-control" placeholder="jumlah_pengajar_perempuan">
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
                <th>id data kejar</th>
                <th>id data kelompok belajar</th>
                <th>id kelompok belajar</th>
                <th>jumlah siswa laki laki</th>
                <th>jumlah siswa perempuan</th>
                <th>jumlah pengajar laki laki</th>
                <th>jumlah pengajar perempuan</th>
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
                    ajax: "{{ route('dataKejars.index') }}",
                    scrollX: 200,
                    deferRender: true,
                    scroller: true,
                    columns: [
                        {data: 'id_data_kejar', name: 'id_data_kejar'},
                        {data: 'id_data_kelompok_belajar', name: 'id_data_kelompok_belajar'},
                        {data: 'id_kelompok_belajar', name: 'id_kelompok_belajar'},
                        {data: 'jumlah_siswa_laki_laki', name: 'jumlah_siswa_laki_laki'},
                        {data: 'jumlah_siswa_perempuan', name: 'jumlah_siswa_perempuan'},
                        {data: 'jumlah_pengajar_laki_laki', name: 'jumlah_pengajar_laki_laki'},
                        {data: 'jumlah_pengajar_perempuan', name: 'jumlah_pengajar_perempuan'},
                        {data: 'action', name: 'action', orderable: false, searchable: false},
                    ]
                });

            });
        </script>
    @endsection

@endsection
