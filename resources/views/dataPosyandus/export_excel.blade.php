<table>
    <thead>
        <tr>
            <th colspan="11" rowspan="2"></th>
        </tr>
        <tr>
            <th></th>
        </tr>
        <tr>
            <th><strong>RT</strong></th>
            <th><strong>RW</strong></th>
            <th><strong>kelurahan</strong></th>
            <th><strong>kecamatan</strong></th>
            <th><strong>Kabupaten Kota</strong></th>
            <th><strong>Provinsi</strong></th>
            <th><strong>Nama Posyandu</strong></th>
            <th><strong>Pengelola</strong></th>
            <th><strong>Sekretaris</strong></th>
            <th><strong>Jenis Posyandu</strong></th>
            <th><strong>Jumlah Kader</strong></th>
            <th><strong>Keterangan</strong></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($dataPosyandu as $a)
            <tr>
                <td>{{ $a->rt }}</td>
                <td>{{ $a->rw }}</td>
                <td>{{ $a->kelurahan }}</td>
                <td>{{ $a->kecamatan }}</td>
                <td>{{ $a->kabupaten_kota }}</td>
                <td>{{ $a->provinsi }}</td>
                <td>{{ $a->nama_posyandu }}</td>
                <td>{{ $a->pengelola }}</td>
                <td>{{ $a->sekretaris }}</td>
                <td>{{ $a->jenis_posyandu }}</td>
                <td>{{ $a->jumlah_kader }}</td>
                <td>{{ $a->keterangan }}</td>
            </tr>
        @endforeach
    </tbody>
</table>