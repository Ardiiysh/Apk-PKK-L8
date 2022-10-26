@extends('layouts.layout')
@section('title', 'data Koperasi')

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
                    <a class="dropdown-item" href="/dataKoperasi">Excel</a>
                    <a class="dropdown-item" href="#">PDF</a>
                    <a class="dropdown-item" href="#">Word</a>
                </div>
            </div>

            <!-- Button trigger modal -->
            <button type="button" href="{{ route('dataKoperasis.create') }}" class="btn btn-success" data-toggle="modal"
                data-target="#exampleModal">
                +
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Data Hatinya</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{ route('dataKoperasis.store') }}" method="POST">
                            @csrf
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>ID Dasawisma:</strong>
                                    <input type="text" name="id_dasawisma" class="form-control" placeholder="id_dasawisma">
                                </div>
                            </div>
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
    <div class="container">
        <table class="data-table display nowrap" style="width: 100%">
            <thead>
                <tr>
                    <th>No</th>
                    {{-- <th>ID Dasawisma</th> --}}
                    <th>RT</th>
                    <th>RW</th>
                    <th>Kelurahan</th>
                    <th>Kecamatan</th>
                    <th>Kabupaten/Kota</th>
                    <th>Provinsi</th>
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
                ajax: "{{ route('dataKoperasis.index') }}",
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    // {
                    //     data: 'id_dasawisma',
                    //     name: 'id_dasawisma'
                    // },
                    {
                        data: 'rt',
                        name: 'rt'
                    },
                    {
                        data: 'rw',
                        name: 'rw'
                    },
                    {
                        data: 'kelurahan',
                        name: 'kelurahan'
                    },
                    {
                        data: 'kecamatan',
                        name: 'kecamatan'
                    },
                    {
                        data: 'kabupaten_kota',
                        name: 'kabupaten_kota'
                    },
                    {
                        data: 'provinsi',
                        name: 'provinsi'
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
