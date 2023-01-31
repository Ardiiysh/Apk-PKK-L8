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
            <th><strong>Kelurahan</strong></th>
            <th><strong>Kabupaten Kota</strong></th>
            <th><strong>Provinsi</strong></th>
            <th><strong>ID Warga</strong></th>
            <th><strong>Tanggal Masuk</strong></th>
            <th><strong>Kedudukan</strong></th>
            <th><strong>Keterangan</strong></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($dataKelompokBelajar as $a)
            <tr>
                <td>{{ $a->rt }}</td>
                <td>{{ $a->rw }}</td>
                <td>{{ $a->kelurahan }}</td>
                <td>{{ $a->kabupaten_kota }}</td>
                <td>{{ $a->provinsi }}</td>
                <td>{{ $a->id_warga }}</td>
                <td>{{ $a->tanggal_masuk }}</td>
                <td>{{ $a->kedudukan }}</td>
                <td>{{ $a->keterangan }}</td>
            </tr>
        @endforeach
    </tbody>
</table>