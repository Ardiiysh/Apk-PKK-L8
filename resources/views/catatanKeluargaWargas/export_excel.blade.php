<table>
    <thead>
        <tr>
            <th colspan="2" rowspan="2"></th>
        </tr>
        <tr>
            <th></th>
        </tr>
        <tr>
            <th><strong>ID Catatan Keluarga</strong></th>
            <th><strong>ID Warga</strong></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($catatanKeluargaWarga as $a)
            <tr>
                <td>{{ $a->id_catatan_keluarga }}</td>
                <td>{{ $a->id_warga }}</td>
            </tr>
        @endforeach
    </tbody>
</table>