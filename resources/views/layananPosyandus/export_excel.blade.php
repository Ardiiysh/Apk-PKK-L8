<table>
    <thead>
        <tr>
            <th colspan="2" rowspan="2"></th>
        </tr>
        <tr>
            <th></th>
        </tr>
        <tr>
            <th><strong>Jenis Layanan</strong></th>
            <th><strong>Keterangan</strong></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($layananPosyandu as $a)
            <tr>
                <td>{{ $a->jenis_layanan }}</td>
                <td>{{ $a->keterangan }}</td>
            </tr>
        @endforeach
    </tbody>
</table>