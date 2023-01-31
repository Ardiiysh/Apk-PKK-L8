<table>
    <thead>
        <tr>
            <th colspan="4" rowspan="2"></th>
        </tr>
        <tr>
            <th></th>
        </tr>
        <tr>
            <th><strong>ID Data Hatinya PKK</strong></th>
            <th><strong>ID Hatinya PKK</strong></th>
            <th><strong>Jumlah</strong></th>
            <th><strong>Satuan</strong></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($dataHatinyaPkk as $a)
            <tr>
                <td>{{ $a->id_data_hatinya }}</td>
                <td>{{ $a->id_hatinya_pkk }}</td>
                <td>{{ $a->jumlah }}</td>
                <td>{{ $a->satuan }}</td>
            </tr>
        @endforeach
    </tbody>
</table>