{{-- <!DOCTYPE html>
<html>
<head>
	<title>Laporan buku</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}


    .box{
    width:600px;
    margin:0auto;
    }
    </style>
    </head>
    <body>
    <br/>
    <divclass=”container”>
    <h3align=”center”>Perpustkaan – Daftar Pegawai</h3><br/>
    <divclass=”row”>
    <divclass=”col-md-7″align=”right”>
    <h4>Data Pegawai</h4>
    </div>
    <divclass=”col-md-5″align=”right”>
    </div>
    </div>
    <br/>
    <divclass=”table-responsive”>
    <tableclass=”table table-striped table-bordered”>
    <center>
		<h5>Laporan buku</h4>
	</center>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Buku</th>
                    <th>Tahun terbit</th>
                    <th>Penulis</th>
                    <th>keterangan</th>
                </tr>
            </thead>
            <tbody>
                @php $i = 1; @endphp
                @foreach ($buku as $buku)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $buku->nama_buku }}</td>
                        <td>{{ $buku->tahun }}</td>
                        <td>{{ $buku->penulis }}</td>
                        <td>{{ $buku->keterangan }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html> --}}


{{-- <!DOCTYPE html>
<html>
<head>
	<title>Cetak laporan buku</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style type="text/css">
        table.static {
            position: relative;
            border: 1px solid #554433;
        }
	</style>
</head>
<body>
    <div class="form-group">
        <p align="center">Laporan Data Buku</p>
        <table border=1 style="text-align: center" align="center">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Buku</th>
                    <th>Tahun Terbit</th>
                    <th>Penulis</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                @php $i=1 @endphp
                @foreach($buku as $buku)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $buku->nama_buku }}</td>
                    <td>{{ $buku->tahun }}</td>
                    <td>{{ $buku->penulis }}</td>
                    <td>{{ $buku->keterangan }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div> --}}
    {{-- <script>
        window.print();
    </script> --}}
{{-- </body>
</html> --}}

{{-- <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>template table</title>
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
    <div style="margin-bottom: 90px;"></div>
    <div style="text-align: center; margin-bottom: 90px">
        <img src="kopsurat.png" alt="">
        <h1>Laporan Buku</h1>
    </div>
    <table class="table1" style="margin-left: auto; margin-right:auto; margin-top: 30px;" border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Buku</th>
                <th>Tahun Terbit</th>
                <th>Penulis</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @php $i=1 @endphp
                @foreach($buku as $buku)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $buku->nama_buku }}</td>
                    <td>{{ $buku->tahun }}</td>
                    <td>{{ $buku->penulis }}</td>
                    <td>{{ $buku->keterangan }}</td>
                </tr>
                @endforeach
        </tbody>
    </table>
</body>
</html> --}}


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>template table</title>
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
    <table width="100%">
        <tr>
            <td width="25" align="center"><img src="{{ asset('img/logopkk.png') }}" width="50%"></td>
            <td width="50" align="center"><h1>Pemberdayaan dan kesejahteraan Keluarga</h1><h1>(PKK)</h1><h2>Desa pasawahan</h2><h5>Alamat:Jalan Otto Iskandardinata kampung tanjung RT 003/RW 013, Pasawahan, Kec. Tarogong Kaler, Kabupaten Garut, Jawa Barat 44151</h5></td>
            <td width="25" align="center"><img src="{{ asset('img/logopkk.png') }}" width="50%"></td>
        </tr>
        </table>
        <hr><width="100" height="75"></hr>
    <table class="table1" style="margin-left: auto; margin-right:auto; margin-top: 30px;" border="1">
        <thead>
            <tr>
                <th>cek</th>
                <th>cek</th>
                <th>cek</th>
                <th>cek</th>
                <th>cek</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>cek</td>
                <td>cek</td>
                <td>cek</td>
                <td>cek</td>
                <td>cek</td>
            </tr>
        </tbody>
    </table>
    <script>
        window.print();
    </script>
</body>
</html>
