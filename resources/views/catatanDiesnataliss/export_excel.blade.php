<table>
    <thead>
        <tr>
            <th colspan="16" rowspan="2"></th>
        </tr>
        <tr>
            <th></th>
        </tr>
        <tr>
            <th><strong>RT</strong></th>
            <th><strong>RW</strong></th>
            <th><strong>Kelurahan</strong></th>
            <th><strong>Kecamatan</strong></th>
            <th><strong>Kabupaten/Kota</strong></th>
            <th><strong>Provinsi</strong></th>
            <th><strong>Bulan</strong></th>
            <th><strong>Tahun</strong></th>
            <th><strong>Nama Ibu</strong></th>
            <th><strong>Nama Suami</strong></th>
            <th><strong>Nama Anak</strong></th>
            <th><strong>Status</strong></th>
            <th><strong>Jenis Kelamin</strong></th>
            <th><strong>Tanggal</strong></th>
            <th><strong>Akta</strong></th>
            <th><strong>Sebab</strong></th>
            <th><strong>Keterangan</strong></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($CD as $a)
            <tr>
                <td>{{ $a->rt }}</td>
                <td>{{ $a->rw }}</td>
                <td>{{ $a->kelurahan }}</td>
                <td>{{ $a->kecamatan }}</td>
                <td>{{ $a->kabupaten_kota }}</td>
                <td>{{ $a->provinsi }}</td>
                <td>{{ $a->bulan }}</td>
                <td>{{ $a->tahun }}</td>
                <td>{{ $a->nama_ibu }}</td>
                <td>{{ $a->nama_suami }}</td>
                <td>{{ $a->nama_anak }}</td>
                <td>{{ $a->status }}</td>
                <td>{{ $a->jenkel }}</td>
                <td>{{ $a->tanggal }}</td>
                <td>{{ $a->akta }}</td>
                <td>{{ $a->sebab }}</td>
                <td>{{ $a->keterangan }}</td>
            </tr>
        @endforeach
    </tbody>
</table>