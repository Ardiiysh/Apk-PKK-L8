<table>
    <thead>
        <tr>
            <th colspan="8" rowspan="2"></th>
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
            <th><strong>Tahun</strong></th>
            <th><strong>Keterangan</strong></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($rekapitulasiKelompokDasawisma as $a)
            <tr>
                <td>{{ $a->rt }}</td>
                <td>{{ $a->rw }}</td>
                <td>{{ $a->kelurahan }}</td>
                <td>{{ $a->kecamatan }}</td>
                <td>{{ $a->kabupaten_kota }}</td>
                <td>{{ $a->provinsi }}</td>
                <td>{{ $a->tahun }}</td>
                <td>{{ $a->keterangan }}</td>
            </tr>
        @endforeach
    </tbody>
</table>