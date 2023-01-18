<table>
    <thead>
        <tr>
            <th colspan="3" rowspan="2"></th>
        </tr>
        <tr>
            <th></th>
        </tr>
        <tr>
            <th><strong>Nama Kelompok Belajar</strong></th>
            <th><strong>Jenis Kelompok Belajar</strong></th>
            <th><strong>Keterangan</strong></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($kelompokBelajar as $a)
            <tr>
                <td>{{ $a->nama_kelompok_belajar }}</td>
                <td>{{ $a->jenis_kelompok_belajar }}</td>
                <td>{{ $a->keterangan }}</td>
            </tr>
        @endforeach
    </tbody>
</table>