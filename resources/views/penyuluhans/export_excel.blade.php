<table>
    <thead>
        <tr>
            <th colspan="4" rowspan="2"></th>
        </tr>
        <tr>
            <th></th>
        </tr>
        <tr>
            <th><strong>Nama Kegiatan</strong></th>
            <th><strong>Jenis Penyuluhanr</strong></th>
            <th><strong>Keterangan</strong></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($penyuluhan as $a)
            <tr>
                <td>{{ $a->nama_kegiatan }}</td>
                <td>{{ $a->jenis_penyuluhan }}</td>
                <td>{{ $a->keterangan }}</td>
            </tr>
        @endforeach
    </tbody>
</table>