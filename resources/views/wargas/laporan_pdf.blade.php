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
                <th>Kepala Rumah Tangga</th>
                <th>No Registrasi</th>
                <th>No Ktp</th>
                <th>Nama Lengkap</th>
                <th>Jabatan Pkk</th>
                <th>JK</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Status Perkawinan</th>
                <th>Status Dalam Keluarga</th>
                <th>Agama</th>
                <th>Alamat</th>
                <th>Pendidikan</th>
                <th>Pekerjaan</th>
                <th>Akseptor Kb</th>
                <th>Posyandu</th>
                <th>Program Bina Keluarga Balita</th>
                <th>Tabungan</th>
                <th>kelompok Belajar</th>
                <th>Paud</th>
                <th>Koperasi</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @php($i = 1);
            @foreach ($warga as $b)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $b->kepala_rumah_tangga }}</td>
                    <td>{{ $b->no_registrasi }}</td>
                    <td>{{ $b->no_ktp }}</td>
                    <td>{{ $b->nama_lengkap }}</td>
                    <td>{{ $b->jabatan_pkk }}</td>
                    <td>{{ $b->jk }}</td>
                    <td>{{ $b->tempat_lahir }}</td>
                    <td>{{ $b->tgl_lahir }}</td>
                    <td>{{ $b->status_perkawinan }}</td>
                    <td>{{ $b->status_dalam_keluarga }}</td>
                    <td>{{ $b->agama }}</td>
                    <td>{{ $b->alamat }}</td>
                    <td>{{ $b->pendidikan }}</td>
                    <td>{{ $b->pekerjaan }}</td>
                    <td>{{ $b->akseptor_kb }}</td>
                    <td>{{ $b->posyandu }}</td>
                    <td>{{ $b->program_bina_keluarga_balita }}</td>
                    <td>{{ $b->tabungan }}</td>
                    <td>{{ $b->kelompok_belajar }}</td>
                    <td>{{ $b->paud }}</td>
                    <td>{{ $b->koperasi }}</td>
                    <td>{{ $b->keterangan }}</td>
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
