<table>
    <thead>
        <tr>
            <th colspan="6" rowspan="2"></th>
        </tr>
        <tr>
            <th></th>
        </tr>
        <tr>
            <th><strong>Nama Buku</strong></th>
            <th><strong>Tahun</strong></th>
            <th><strong>Penulis</strong></th>
            <th><strong>Keterangan</strong></th>
            <th><strong>Created at</strong></th>
            <th><strong>Update at</strong></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($book as $a)
            <tr>
                <td>{{ $a->nama_buku }}</td>
                <td>{{ $a->tahun }}</td>
                <td>{{ $a->penulis }}</td>
                <td>{{ $a->keterangan }}</td>
                <td>{{ $a->created_at }}</td>
                <td>{{ $a->updated_at }}</td>
            </tr>
        @endforeach
    </tbody>
</table>