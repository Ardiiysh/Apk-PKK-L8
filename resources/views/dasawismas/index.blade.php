@extends('layouts.layout')
 @section('title','Dasawisma')

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
            <!-- Button trigger modal -->
            <button type="button"  href="{{ route('dasawismas.create') }}" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                +
            </button>
            
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Dasawisma</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <form action="{{ route('dasawismas.store') }}" method="POST">
                        @csrf
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Nama Dasawisma:</strong>
                                <input type="text" name="nama_dasawisma" class="form-control" placeholder="Dasawisma">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>RT:</strong>
                                <input type="number" name="rt" class="form-control" min="0" placeholder="RT">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>RW:</strong>
                                <input type="number" name="rw" class="form-control" min="0" placeholder="RW">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Kelurahan:</strong>
                                <input type="text" name="kelurahan" class="form-control"  placeholder="kelurahan">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>kecamatan:</strong>
                                <input type="text" name="kecamatan" class="form-control" placeholder="RW">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Kabupaten/Kota:</strong>
                                <input type="text" name="kabupaten_kota" class="form-control"  placeholder="kabupaten_kota">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Provinsi:</strong>
                                <input type="text" name="provinsi" class="form-control"  placeholder="provinsi">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>keterangan:</strong>
                                <input type="text" name="keterangan" class="form-control"  placeholder="keterangan">
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
    <table class="table table-bordered ">
        <thead>
        <tr>
            <th>No</th>
            <th>Nama Dasawisma</th>
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
         @php
        $i = 0;
        @endphp
        @foreach ($dasawismas as $dasawisma)
        <tr>


            <td>{{ ++$i }}</td>
            <td>{{ $dasawisma->nama_dasawisma}}</td>
            <td>{{ $dasawisma->rt}}</td>
            <td>{{ $dasawisma->rw}}</td>
            <td>{{ $dasawisma->kelurahan}}</td>
            <td>{{ $dasawisma->kecamatan}}</td>
            <td>{{ $dasawisma->kabupaten_kota}}</td>
            <td>{{ $dasawisma->provinsi}}</td>
            <td>{{ $dasawisma->keterangan}}</td>
            <td>
                <form onsubmit="return confirm('Apakah anda yakin ingin menghapus {{$dasawisma->nama_dasawisma}} ?');"  action="{{ route('dasawismas.destroy',$dasawisma->id) }}" method="POST">

                    {{-- <a class="btn btn-info" href="{{ route('dasawismas.show',$dasawisma->id) }}">Show</a> --}}
    
                    <a class="btn btn-primary" href="{{ route('dasawismas.edit',$dasawisma->id) }}" ><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                      </svg></a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                      </svg></button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

      
@endsection