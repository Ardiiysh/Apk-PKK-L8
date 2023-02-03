<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catatan Keluarga</title>
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
                <th>Id Catatan Keluarga</th>
                <th>Kepala Rumah Tangga</th>
                <th>Id Dasawisma</th>
                <th>Tahun</th>
                <th>Kriteria Rumah</th>
                <th>Jamban</th>
                <th>Jumlah Jamban</th>
                <th>Sumber Air</th>
                <th>Tempat Sampah</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @php($i = 1);
            @foreach ($catatanKeluarga as $b)
                <tr>
                    <td>{{$i}}</td>
                    <td>{{$b->id_catatan_keluarga}}</td>
                    <td>{{$b->kepala_rumah_tangga}}</td>
                    <td>{{$b->id_dasawisma}}</td>
                    <td>{{$b->tahun}}</td>
                    <td>{{$b->kriteria_rumah}}</td>
                    <td>{{$b->jamban}}</td>
                    <td>{{$b->jumlah_jamban}}</td>
                    <td>{{$b->sumber_air}}</td>
                    <td>{{$b->tempat_sampah}}</td>
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
