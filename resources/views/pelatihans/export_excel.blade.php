<table>
    <thead>
        <tr>
            <th colspan="4" rowspan="2"></th>
        </tr>
        <tr>
            <th></th>
        </tr>
        <tr>
            <th><strong>Nama Pelatihan</strong></th>
            <th><strong>Kriteria Kader</strong></th>
            <th><strong>Penyelenggara</strong></th>
            <th><strong>Keterangan</strong></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pelatihan as $a)
            <tr>
                <td>{{ $a->nama_pelatihan }}</td>
                <td>{{ $a->kriteria_kader }}</td>
                <td>{{ $a->penyelenggara }}</td>
                <td>{{ $a->keterangan }}</td>
            </tr>
        @endforeach
    </tbody>
</table>