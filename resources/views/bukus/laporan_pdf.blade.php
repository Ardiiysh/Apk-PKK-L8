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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Buku</title>
    <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('template/')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('template/')}}/dist/css/adminlte.min.css">
{{-- link datatable --}}
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"/>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css"/>
</head>
<body>

</body>
</html>
