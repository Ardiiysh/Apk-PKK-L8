<table>
    <thead>
        <tr>
            <th colspan="9" rowspan="2"></th>
        </tr>
        <tr>
            <th></th>
        </tr>
        <tr>
            <th><strong>RT</strong></th>
            <th><strong>RW</strong></th>
            <th><strong>Kelurahan</strong></th>
            <th><strong>Kecamatan</strong></th>
            <th><strong>Kabupaten Kota</strong></th>
            <th><strong>Provinsi</strong></th>
            <th><strong>Keterangan</strong></th>
            <th><strong>Nama Warung Pkk</strong></th>
            <th><strong>Pengelola</strong></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($dataAset as $a)
            <tr>
                <td>{{ $a->rt }}</td>
                <td>{{ $a->rw }}</td>
                <td>{{ $a->kelurahan }}</td>
                <td>{{ $a->kecamatan }}</td>
                <td>{{ $a->kabupaten_kota }}</td>
                <td>{{ $a->provinsi }}</td>
                <td>{{ $a->keterangan }}</td>
                <td>{{ $a->nama_warung_pkk }}</td>
                <td>{{ $a->pengelola }}</td>
            </tr>
        @endforeach
    </tbody>
</table>