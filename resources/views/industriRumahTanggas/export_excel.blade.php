<table>
    <thead>
        <tr>
            <th colspan="3" rowspan="2"></th>
        </tr>
        <tr>
            <th></th>
        </tr>
        <tr>
            <th><strong>Komoditi</strong></th>
            <th><strong>Kategori</strong></th>
            <th><strong>Keterangan</strong></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($industriRumahTangga as $a)
            <tr>
                <td>{{ $a->komoditi }}</td>
                <td>{{ $a->kategori }}</td>
                <td>{{ $a->keterangan }}</td>
            </tr>
        @endforeach
    </tbody>
</table>