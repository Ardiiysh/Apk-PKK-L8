<table>
    <thead>
        <tr>
            <th colspan="4" rowspan="2"></th>
        </tr>
        <tr>
            <th></th>
        </tr>
        <tr>
            <th><strong>RT</strong></th>
            <th><strong>RW</strong></th>
            <th><strong>Kelurahan</strong></th>
            <th><strong>Tahun</strong></th>
            <th><strong>Keterangan</strong></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($rekapitulasiKelompokPkkRt as $a)
            <tr>
                <td>{{ $a->rt }}</td>
                <td>{{ $a->rw }}</td>
                <td>{{ $a->kelurahan }}</td>
                <td>{{ $a->tahun }}</td>
                <td>{{ $a->keterangan }}</td>
            </tr>
        @endforeach
    </tbody>
</table>