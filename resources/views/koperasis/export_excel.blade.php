<table>
    <thead>
        <tr>
            <th colspan="6" rowspan="2"></th>
        </tr>
        <tr>
            <th></th>
        </tr>
        <tr>
            <th><strong>Nama Koperasi</strong></th>
            <th><strong>Jenis Koperasi</strong></th>
            <th><strong>Status Hukum</strong></th>
            <th><strong>Anggota Laki-Laki</strong></th>
            <th><strong>Anggota Perempuan</strong></th>
            <th><strong>Keterangan</strong></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($koperasi as $a)
            <tr>
                <td>{{ $a->nama_koperasi }}</td>
                <td>{{ $a->jenis_koperasi }}</td>
                <td>{{ $a->status_hukum }}</td>
                <td>{{ $a->anggota_laki_laki }}</td>
                <td>{{ $a->anggota_perempuan }}</td>
                <td>{{ $a->anggota_perempuan }}</td>
                <td>{{ $a->keterangan }}</td>
            </tr>
        @endforeach
    </tbody>
</table>