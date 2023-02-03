<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Keluarga</title>
    <style>

        .table1 {
            font-family: sans-serif;
            color: #444;
            border-collapse: collapse;
            width: 50%;
            border: 2px solid #000000;
        }

        .table1 tr th{
            background: #7f7f7f;
            color: #fff;
            font-weight: normal;
        }

        .table1, th, td {
            padding: 8px 20px;
            text-align: center;
        }

        .table1 tr:hover {
            background-color: #f5f5f5;
        }

        .table1 tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    @include('layouts.kop_surat')    
        <table class="table1" style="margin-left: auto; margin-right:auto; margin-top: 30px;" border="1">
        <thead>
            <tr>
                <th>No</th>
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
            </tr>
        </thead>
        <tbody>
            @php($i = 1);
            @foreach ($dataKeluarga as $b)
                <tr>
                    <td>{{$i}}</td>
                    <td>{{$b->rt}}</td>
                    <td>{{$b->rw}}</td>
                    <td>{{$b->kelurahan}}</td>
                    <td>{{$b->kecamatan}}</td>
                    <td>{{$b->kabupaten kota}}</td>
                    <td>{{$b->provinsi}}</td>
                    <td>{{$b->kepala_rumah_tangga}}</td>
                    <td>{{$b->jumlah_anggota_keluarga}}</td>
                    <td>{{$b->laki_laki}}</td>
                    <td>{{$b->wanita}}</td>
                    <td>{{$b->jumlah_kepala_keluarga}}</td>
                    <td>{{$b->balita}}</td>
                    <td>{{$b->pasangan_usia_subur}}</td>
                    <td>{{$b->wanita_usia_subur}}</td>
                    <td>{{$b->buta}}</td>
                    <td>{{$b->ibu_hamil}}</td>
                    <td>{{$b->ibu_menyusui}}</td>
                    <td>{{$b->lansia}}</td>
                    <td>{{$b->makanan_pokok}}</td>
                    <td>{{$b->jamban}}</td>
                    <td>{{$b->sumber_air}}</td>
                    <td>{{$b->tempat_pembuangan_sampah}}</td>
                    <td>{{$b->saluran_pembuangan_air_limbah}}</td>
                    <td>{{$b->stiker_p4k}}</td>
                    <td>{{$b->kriteria_rumah}}</td>
                    <td>{{$b->up2k}}</td>
                    <td>{{$b->kegiatan_usaha_kesehatan_lingkungan}}</td>
                    <td>{{$b->keterangan}}</td>
                </tr>
                @php($i++);
            @endforeach
        </tbody>
    </table>
    {{-- <script>
        window.print();
    </script> --}}
</body>
</html>
