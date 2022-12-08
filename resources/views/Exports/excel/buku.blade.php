<table>
    <thead>
        <tr>
            <th colspan="3" rowspan="2"></th>
        </tr>
        <tr>
            <th></th>
        </tr>
        <tr>
            <th>Nama Buku</th>
            <th>Tahun</th>
            <th>Penulis</th>
            <th>Keterangan</th>
            <th>Created at</th>
            <th>Update at</th>
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