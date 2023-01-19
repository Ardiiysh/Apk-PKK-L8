<table>
    <thead>
        <tr>
            <th colspan="4" rowspan="2"></th>
        </tr>
        <tr>
            <th></th>
        </tr>
        <tr>
            <th><strong>ID Data Aset</strong></th>
            <th><strong>ID Aset Desa</strong></th>
            <th><strong>Volume</strong></th>
            <th><strong>Satuan</strong></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($dataAsetDesa as $a)
            <tr>
                <td>{{ $a->id_data_aset }}</td>
                <td>{{ $a->id_aset_desa }}</td>
                <td>{{ $a->volume }}</td>
                <td>{{ $a->satuan }}</td>
            </tr>
        @endforeach
    </tbody>
</table>