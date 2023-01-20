@extends('layouts.layout')
 @section('title','dataAset')

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
      <a class="dropdown-item" href="/dataAset">Excel</a>
      <a class="dropdown-item" href="/dataAset-pdf">PDF</a>
      {{-- <a class="dropdown-item" href="#">Word</a> --}}
    </div>
  </div>

        {{-- <a href="/dataAset" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a> --}}




            <!-- Button trigger modal -->
            <button type="button"  href="{{ route('dataAsets.create') }}" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                +
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">dataAset</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <form action="{{ route('dataAsets.store') }}" method="POST">
                        @csrf
                        {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>ID Dasawisma:</strong>
                                <input ttype="number" min="0" name="id_dasawisma" class="form-control" placeholder="ID Dasawisma">
                            </div>
                        </div> --}}
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
                                <strong>Keterangan:</strong>
                                <input type="text" name="keterangan" class="form-control" placeholder="keterangan">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>nama warung pkk:</strong>
                                <input type="text" name="nama_warung_pkk" class="form-control" placeholder="nama warung pkk">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>pengelola:</strong>
                                <input type="text" name="pengelola" class="form-control" placeholder="pengelola">
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
                <th>No</th>
                {{-- <th>id dasawisma</th> --}}
                <th>Nama Warung PKK</th>
                <th>Pengelola</th>
                <th>RT</th>
                <th>RW</th>
                <th>Kelurahan</th>
                <th>Kecamatan</th>
                <th>Kabupaten Kota</th>
                <th>Provinsi</th>
                <th>Keterangan</th>
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
                    ajax: "{{ route('dataAsets.index') }}",
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
                        {data: 'nama_warung_pkk', name: 'nama_warung_pkk'},
                        {data: 'pengelola', name: 'pengelola'},
                        {data: 'rt', name: 'rt'},
                        {data: 'rw', name: 'rw'},
                        {data: 'kelurahan', name: 'kelurahan'},
                        {data: 'kecamatan', name: 'kecamatan'},
                        {data: 'kabupaten_kota', name: 'kabupaten_kota'},
                        {data: 'provinsi', name: 'provinsi'},
                        {data: 'keterangan', name: 'keterangan'},
                        {data: 'action', name: 'action', orderable: false, searchable: false},
                    ]
                });

            });
        </script>
    @endsection

@endsection
