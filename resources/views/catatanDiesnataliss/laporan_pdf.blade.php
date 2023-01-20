<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catatan Diesnatalis</title>
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
    <!-- <div style="margin-bottom: 90px;"></div>
    <div style="text-align: center; margin-bottom: 90px">
        <img src="kopsurat.png" alt="">
        <h1>INI PDF PKK CIHUYYYY</h1>
    </div> -->
    <table width="100%">
        <tr>
            <td width="25" align="center"><img src="{{ public_path('img/logopkk.png') }}" width="100%"></td>
            <td width="50" align="center"><h1>Pemberdayaan dan kesejahteraan Keluarga</h1><h1>(PKK)</h1><h2>Desa pasawahan</h2><h5>Alamat:Jalan Otto Iskandardinata kampung tanjung RT 003/RW 013, Pasawahan, Kec. Tarogong Kaler, Kabupaten Garut, Jawa Barat 44151</h5></td>
            <td width="25" align="center"><img src="{{ public_path('img/logopkk.png') }}" width="100%"></td>
        </tr>
        </table>
        <hr><width="100" height="75"></hr>
    <table class="table1" style="margin-left: auto; margin-right:auto; margin-top: 30px;" border="1">
        <thead>
            <tr>
                <th>No</th>
                {{-- <th>Id Dasa Wisma</th> --}}
                <th>RT</th>
                <th>RW</th>
                <th>Kelurahan</th>
                <th>Kecamatan</th>
                <th>Kabupaten/Kota</th>
                <th>Provinsi</th>
                <th>Bulan</th>
                <th>Tahun</th>
                <th>Nama Ibu</th>
                <th>Nama Suami</th>
                <th>Nama Anak</th>
                <th>Status</th>
                <th>JK</th>
                <th>Tanggal</th>
                <th>Akta</th>
                <th>Sebab</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @php($i = 1);
            @foreach ($catatanDiesnatalis as $b)
                <tr>
                    <td>{{$i}}</td>
                    {{-- <td>{{$b->id_dasawisma}}</td> --}}
                    <td>{{$b->rt}}</td>
                    <td>{{$b->rw}}</td>
                    <td>{{$b->kelurahan}}</td>
                    <td>{{$b->kecamatan}}</td>
                    <td>{{$b->kabupaten_kota}}</td>
                    <td>{{$b->provinsi}}</td>
                    <td>{{$b->bulan}}</td>
                    <td>{{$b->tahun}}</td>
                    <td>{{$b->nama_ibu}}</td>
                    <td>{{$b->nama_suami}}</td>
                    <td>{{$b->nama_anak}}</td>
                    <td>{{$b->status}}</td>
                    <td>{{$b->jenkel}}</td>
                    <td>{{$b->tanggal}}</td>
                    <td>{{$b->akta}}</td>
                    <td>{{$b->sebab}}</td>
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
