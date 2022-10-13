@extends('layouts.layout')
 @section('title','Data Industri Rumah Tangga')

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
      <a class="dropdown-item" href="/dataIndustriRumahTangga">Excel</a>
      <a class="dropdown-item" href="#">PDF</a>
      <a class="dropdown-item" href="#">Word</a>
    </div>
  </div>

        {{-- <a href="/dataIndustriRumahTangga" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a> --}}




            <!-- Button trigger modal -->
            <button type="button"  href="{{ route('dataIndustriRumahTanggas.create') }}" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                +
            </button>
            
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Data Industri Rumah Tangga</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <form action="{{ route('dataIndustriRumahTanggas.store') }}" method="POST">
                        @csrf
                        
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>id data industri:</strong>
                                <input type="number" min="0" name="id_data_industri" class="form-control" placeholder="id data industri">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>id industri rumah tangga:</strong>
                                <input type="number" min="0" name="id_industri_rumah_tangga" class="form-control" placeholder="id industri rumah tangga">
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
    <table class="table table-bordered ">
        <thead>
        <tr>
            <th>No</th>
            <th>ID Data Industri</th>
            <th>ID Industri Rumah Tangga</th>
            <th>Volume</th>
            <th>satuan</th>
            <th width="280px">Action</th>
        </tr>
    </thead>
         @php
        $i = 0;
        @endphp
        @foreach ($dataIndustriRumahTanggas as $dataIndustriRumahTangga)
        <tr>


            <td>{{ ++$i }}</td>
            <td>{{ $dataIndustriRumahTangga->id_data_industri}}</td>
            <td>{{ $dataIndustriRumahTangga->id_industri_rumah_tangga}}</td>
            <td>{{ $dataIndustriRumahTangga->volume}}</td>
            <td>{{ $dataIndustriRumahTangga->satuan}}</td>
            <td>
                <form onsubmit="return confirm('Apakah anda yakin ingin menghapus {{$dataIndustriRumahTangga->volume}} ?');"  action="{{ route('dataIndustriRumahTanggas.destroy',$dataIndustriRumahTangga->id_data_industri_rumah_tangga) }}" method="POST">

                    {{-- <a class="btn btn-info" href="{{ route('dataIndustriRumahTanggas.show',$dataIndustriRumahTangga->id_data_industri_rumah_tangga) }}">Show</a> --}}
    
                    <a class="btn btn-primary" href="{{ route('dataIndustriRumahTanggas.edit',$dataIndustriRumahTangga->id_data_industri_rumah_tangga) }}" ><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
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