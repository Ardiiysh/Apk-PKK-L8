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
    <table class="table table-bordered ">
        <thead>
            <tr>
                <th>No</th>
                <th>Id Perpustakaan</th>
                <th>Id Buku</th>
                <th>Jumlah</th>
                <th width="280px">Action</th>
            </tr>
        </thead>
        @php
            $i = 0;
        @endphp
        @foreach ($bukuPerpustakaans as $bukuPerpustakaan)
            <tr>


                <td>{{ ++$i }}</td>
                <td>{{ $bukuPerpustakaan->id_perpustakaan }}</td>
                <td>{{ $bukuPerpustakaan->id_buku }}</td>
                <td>{{ $bukuPerpustakaan->jumlah }}</td>
                <td>
                    <form onsubmit="return confirm('Apakah anda yakin ingin menghapus {{ $bukuPerpustakaan->id_perpustakaan }} ?');"
                        action="{{ route('bukuPerpustakaans.destroy', $bukuPerpustakaan->id) }}" method="POST">

                        {{-- <a class="btn btn-info" href="{{ route('bukus.show',$buku->id) }}">Show</a> --}}

                        <a class="btn btn-primary" href="{{ route('bukuPerpustakaans.edit', $bukuPerpustakaan->id) }}"><svg width="1em"
                                height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                <path fill-rule="evenodd"
                                    d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                            </svg></a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger"><svg width="1em" height="1em" viewBox="0 0 16 16"
                                class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                <path fill-rule="evenodd"
                                    d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                            </svg></button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>


@endsection
