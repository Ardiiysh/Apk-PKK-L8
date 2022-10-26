@extends('layouts.layout')
 @section('title','dataKeluarga')

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
      <a class="dropdown-item" href="/dataKeluarga">Excel</a>
      <a class="dropdown-item" href="#">PDF</a>
      {{-- <a class="dropdown-item" href="#">Word</a> --}}
    </div>
  </div>

        {{-- <a href="/dataKeluarga" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a> --}}




            <!-- Button trigger modal -->
            <button type="button"  href="{{ route('dataKeluargas.create') }}" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                +
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">dataKeluarga</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <form action="{{ route('dataKeluargas.store') }}" method="POST">
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
                                <strong>kepala rumah tangga:</strong>
                                <input type="number" min="0" name="kepala_rumah_tangga" class="form-control" placeholder="kepala_rumah_tangga">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>jumlah anggota keluarga:</strong>
                                <input type="number" min="0" name="jumlah_anggota_keluarga" class="form-control" placeholder="jumlah_anggota_keluarga">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>laki-laki:</strong>
                                <input type="number" min="0" name="laki_laki" class="form-control" placeholder="laki_laki">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>wanita:</strong>
                                <input type="number" min="0" name="wanita" class="form-control" placeholder="wanita">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>jumlah kepala keluarga:</strong>
                                <input type="number" min="0" name="jumlah_kepala_keluarga" class="form-control" placeholder="APA">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>balita:</strong>
                                <input type="number" min="0" name="balita" class="form-control" placeholder="balita">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>pasangan usia subur:</strong>
                                <input type="number" min="0" name="pasangan_usia_subur" class="form-control" placeholder="pasangan_usia_subur">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>wanita usia subur:</strong>
                                <input type="number" min="0" name="wanita_usia_subur" class="form-control" placeholder="wanita_usia_subur">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>buta:</strong>
                                <input type="number" min="0" name="buta" class="form-control" placeholder="buta">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>ibu hamil:</strong>
                                <input type="number" min="0" name="ibu_hamil" class="form-control" placeholder="ibu_hamil">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>ibu menyusui:</strong>
                                <input type="number" min="0" name="ibu_menyusui" class="form-control" placeholder="ibu_menyusui">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>lansia:</strong>
                                <input type="number" min="0" name="lansia" class="form-control" placeholder="lansia">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>makanan pokok:</strong>
                                <input type="number" min="0" name="makanan_pokok" class="form-control" placeholder="makanan_pokok">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>jamban:</strong>
                                <input type="number" min="0" name="jamban" class="form-control" placeholder="jamban">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>tempat pembuangan sampah:</strong>
                                <input type="number" min="0" name="tempat_pembuangan_sampah" class="form-control" placeholder="tempat_pembuangan_sampah">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>saluran pembuangan air limbah:</strong>
                                <input type="number" min="0"  name="saluran_pembuangan_air_limbah" class="form-control" placeholder="saluran_pembuangan_air_limbah">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Sumber Air:</strong>
                                <input type="text"   name="sumber_air" class="form-control" placeholder="sumber_air">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>stiker p4k:</strong>
                                <input type="text"   name="stiker_p4k" class="form-control" placeholder="stiker_p4k">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>kriteria rumah:</strong>
                                <input type="text"  name="kriteria_rumah" class="form-control" placeholder="kriteria_rumah">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>up2k:</strong>
                                <input type="text"   name="up2k" class="form-control" placeholder="up2k">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>kegiatan usaha kesehatan lingkungan:</strong>
                                <input type="text"  name="kegiatan_usaha_kesehatan_lingkungan" class="form-control" placeholder="kegiatan_usaha_kesehatan_lingkungan">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>keterangan:</strong>
                                <input type="text"   name="keterangan" class="form-control" placeholder="keterangan">
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
                <th>NO</th>
                {{-- <th>id dasawisma</th> --}}
                <th>rt</th>
                <th>rw</th>
                <th>kelurahan</th>
                <th>kecamatan</th>
                <th>kabupaten kota</th>
                <th>provinsi</th>
                <th>kepala rumah tangga</th>
                <th>jumlah anggota keluarga</th>
                <th>laki laki</th>
                <th>wanita</th>
                <th>jumlah kepala keluarga</th>
                <th>balita</th>
                <th>pasangan usia subur</th>
                <th>wanita usia subur</th>
                <th>buta</th>
                <th>ibu hamil</th>
                <th>ibu menyusui</th>
                <th>lansia</th>
                <th>makanan pokok</th>
                <th>jamban</th>
                <th>sumber air</th>
                <th>tempat pembuangan sampah</th>
                <th>saluran pembuangan air limbah</th>
                <th>stiker p4k</th>
                <th>kriteria rumah</th>
                <th>up2k</th>
                <th>kegiatan usaha kesehatan lingkungan</th>
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
                    ajax: "{{ route('dataKeluargas.index') }}",
                    scrollX: 200,
                    deferRender: true,
                    scroller: true,
                    columns: [
                        // {data: 'id_data_keluarga', name: 'id_data_keluarga'},
                        // {data: 'id_dasawisma', name: 'id_dasawisma'},
                        {
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                        {data: 'rt', name: 'rt'},
                        {data: 'rw', name: 'rw'},
                        {data: 'kelurahan', name: 'kelurahan'},
                        {data: 'kecamatan', name: 'kecamatan'},
                        {data: 'kabupaten_kota', name: 'kabupaten_kota'},
                        {data: 'provinsi', name: 'provinsi'},
                        {data: 'kepala_rumah_tangga', name: 'kepala_rumah_tangga'},
                        {data: 'jumlah_anggota_keluarga', name: 'jumlah_anggota_keluarga'},
                        {data: 'laki_laki', name: 'laki_laki'},
                        {data: 'wanita', name: 'wanita'},
                        {data: 'jumlah_kepala_keluarga', name: 'jumlah_kepala_keluarga'},
                        {data: 'balita', name: 'balita'},
                        {data: 'pasangan_usia_subur', name: 'pasangan_usia_subur'},
                        {data: 'wanita_usia_subur', name: 'wanita_usia_subur'},
                        {data: 'buta', name: 'buta'},
                        {data: 'ibu_hamil', name: 'ibu_hamil'},
                        {data: 'ibu_menyusui', name: 'ibu_menyusui'},
                        {data: 'lansia', name: 'lansia'},
                        {data: 'makanan_pokok', name: 'makanan_pokok'},
                        {data: 'jamban', name: 'jamban'},
                        {data: 'sumber_air', name: 'sumber_air'},
                        {data: 'tempat_pembuangan_sampah', name: 'tempat_pembuangan_sampah'},
                        {data: 'saluran_pembuangan_air_limbah', name: 'saluran_pembuangan_air_limbah'},
                        {data: 'stiker_p4k', name: 'stiker_p4k'},
                        {data: 'kriteria_rumah', name: 'kriteria_rumah'},
                        {data: 'up2k', name: 'up2k'},
                        {data: 'kegiatan_usaha_kesehatan_lingkungan', name: 'kegiatan_usaha_kesehatan_lingkungan'},
                        {data: 'keterangan', name: 'keterangan'},
                        {data: 'action', name: 'action', orderable: false, searchable: false},
                    ]
                });

            });
        </script>
    @endsection

@endsection
