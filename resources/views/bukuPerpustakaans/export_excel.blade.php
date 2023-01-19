<table>
    <thead>
        <tr>
            <th colspan="5" rowspan="2"></th>
        </tr>
        <tr>
            <th></th>
        </tr>
        <tr>
            <th><strong>Nama Perpustakaan</strong></th>
            <th><strong>Judul Buku</strong></th>
            <th><strong>Pengarang</strong></th>
            <th><strong>Tahun</strong></th>
            <th><strong>Jumlah</strong></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($perpustakaan as $a)
            <tr>
                <td>{{ $a->nama_perpus }}</td>
                <td>{{ $a->judul_buku }}</td>
                <td>{{ $a->pengarang }}</td>
                <td>{{ $a->tahun }}</td>
                <td>{{ $a->jumlah }}</td>
            </tr>
        @endforeach
    </tbody>
</table>