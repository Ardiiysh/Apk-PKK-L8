<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Perpustakaan</title>
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
                <th>Rt</th>
                <th>Rw</th>
                <th>Kelurahan</th>
                <th>Kecamatan</th>
                <th>Kabupaten Kota</th>
                <th>Provinsi</th>
                <th>Id Warga</th>
                <th>Tanggal Masuk</th>
                <th>Kedudukan</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @php($i = 1);
            @foreach ($pelatihanKader as $b)
                <tr>
                    <td>{{$i}}</td>
                    <td>{{$b->rt}}</td>
                    <td>{{$b->rw}}</td>
                    <td>{{$b->kelurahan}}</td>
                    <td>{{$b->kecamatan}}</td>
                    <td>{{$b->kabupaten_kota}}</td>
                    <td>{{$b->provinsi}}</td>
                    <td>{{$b->id_warga}}</td>
                    <td>{{$b->tanggal_masuk}}</td>
                    <td>{{$b->kedudukan}}</td>
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
