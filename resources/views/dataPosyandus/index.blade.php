@extends('layouts.layout')
 @section('title','dataPosyandu')

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
      <a class="dropdown-item" href="/dataPosyandu">Excel</a>
      <a class="dropdown-item" href="/dataPosyandu-pdf">PDF</a>
      {{-- <a class="dropdown-item" href="#">Word</a> --}}
    </div>
  </div>

        {{-- <a href="/dataPosyandu" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a> --}}




            <!-- Button trigger modal -->
            <button type="button"  href="{{ route('dataPosyandus.create') }}" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                +
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">dataPosyandu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <form action="{{ route('dataPosyandus.store') }}" method="POST">
                        @csrf
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>RT:</strong>
                                <select type="number" min="0"  name="rt" class="form-control" placeholder="Masukkan RT">
                                    <option >-- Pilih RT --</option>
                                    @foreach ($dasawisma as $id)
                                    <option value="{{$id->rt}}"> {{$id->rt}}</option>
                                     @endforeach
                                   </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>RW:</strong>
                                <select type="number" min="0"  name="rw" class="form-control" placeholder="Masukkan RW">
                                    <option >-- Pilih RW --</option>
                                    @foreach ($dasawisma as $id)
                                    <option value="{{$id->rw}}"> {{$id->rw}}</option>
                                     @endforeach
                                   </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>kelurahan:</strong>
                                <select type="text" name="kelurahan" class="form-control" placeholder="Masukkan kelurahan">
                                    <option >-- Pilih kelurahan --</option>
                                    @foreach ($dasawisma as $id)
                                    <option value="{{$id->kelurahan}}"> {{$id->kelurahan}}</option>
                                     @endforeach
                                   </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>kecamatan:</strong>
                                <select type="text" name="kecamatan" class="form-control" placeholder="Masukkan kecamatan">
                                    <option >-- Pilih kecamatan --</option>
                                    @foreach ($dasawisma as $id)
                                    <option value="{{$id->kecamatan}}"> {{$id->kecamatan}}</option>
                                     @endforeach
                                   </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>kabupaten/kota:</strong>
                                <select type="text" name="kabupaten_kota" class="form-control" placeholder="Masukkan kabupaten/kota">
                                    <option >-- Pilih kabupaten/kota --</option>
                                    @foreach ($dasawisma as $id)
                                    <option value="{{$id->kabupaten_kota}}"> {{$id->kabupaten_kota}}</option>
                                     @endforeach
                                   </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>provinsi:</strong>
                                <select type="text" name="provinsi" class="form-control" placeholder="Masukkan provinsi">
                                    <option >-- Pilih provinsi --</option>
                                    @foreach ($dasawisma as $id)
                                    <option value="{{$id->provinsi}}"> {{$id->provinsi}}</option>
                                     @endforeach
                                   </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>nama posyandu:</strong>
                                <input type="text" name="nama_posyandu" class="form-control" placeholder="nama_posyandu">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>pengelola:</strong>
                                <input type="text" name="pengelola" class="form-control" placeholder="pengelola">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>sekretaris:</strong>
                                <input type="text" name="sekretaris" class="form-control" placeholder="sekretaris">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>jenis posyandu:</strong>
                                <input type="text" name="jenis_posyandu" class="form-control" placeholder="jenis_posyandu">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>jumlah kader:</strong>
                                <input  type="number" min="0" name="jumlah_kader" class="form-control" placeholder="jumlah_kader">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>keterangan:</strong>
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
                <th>No </th>
                {{-- <th>id dasawisma </th> --}}
                <th>rt </th>
                <th>rw </th>
                <th>kelurahan </th>
                <th>kecamatan </th>
                <th>kabupaten kota </th>
                <th>provinsi </th>
                <th>nama posyandu </th>
                <th>pengelola </th>
                <th>sekretaris </th>
                <th>jenis posyandu </th>
                <th>jumlah kader </th>
                <th>keterangan </th>
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
                    ajax: "{{ route('dataPosyandus.index') }}",
                    scrollX: 200,
                    deferRender: true,
                    scroller: true,
                    columns: [
                        {
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                        // {data: 'id_dasawisma', name: 'id_dasawisma'},
                        {data: 'rt', name: 'rt'},
                        {data: 'rw', name: 'rw'},
                        {data: 'kelurahan', name: 'kelurahan'},
                        {data: 'kecamatan', name: 'kecamatan'},
                        {data: 'kabupaten_kota', name: 'kabupaten_kota'},
                        {data: 'provinsi', name: 'provinsi'},
                        {data: 'nama_posyandu', name: 'nama_posyandu'},
                        {data: 'pengelola', name: 'pengelola'},
                        {data: 'sekretaris', name: 'sekretaris'},
                        {data: 'jenis_posyandu', name: 'jenis_posyandu'},
                        {data: 'jumlah_kader', name: 'jumlah_kader'},
                        {data: 'keterangan', name: 'keterangan'},
                        {data: 'action', name: 'action', orderable: false, searchable: false},
                    ]
                });

            });
        </script>
    @endsection

@endsection
