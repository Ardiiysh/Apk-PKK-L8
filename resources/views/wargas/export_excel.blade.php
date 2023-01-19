<table>
    <thead>
        <tr>
            <th colspan="22" rowspan="2"></th>
        </tr>
        <tr>
            <th></th>
        </tr>
        <tr>
            <th><strong>Kepala Rumah Tangga</strong></th>
            <th><strong>No Registrasi</strong></th>
            <th><strong>No Ktp</strong></th>
            <th><strong>Nama Lengkap</strong></th>
            <th><strong>Jabatan Pkk</strong></th>
            <th><strong>JK</strong></th>
            <th><strong>Tempat Lahir</strong></th>
            <th><strong>Tanggal Lahir</strong></th>
            <th><strong>Status Perkawinan</strong></th>
            <th><strong>Status Dalam Keluarga</strong></th>
            <th><strong>Agama</strong></th>
            <th><strong>Alamat</strong></th>
            <th><strong>Pendidikan</strong></th>
            <th><strong>Pekerjaan</strong></th>
            <th><strong>Akseptor Kb</strong></th>
            <th><strong>Posyandu</strong></th>
            <th><strong>Program Bina Keluarga Balita</strong></th>
            <th><strong>Tabungan</strong></th>
            <th><strong>kelompok Belajar</strong></th>
            <th><strong>Paud</strong></th>
            <th><strong>Koperasi</strong></th>
            <th><strong>Keterangan</strong></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($wargas as $a)
            <tr>
                <td>{{ $a->kepala_rumah_tangga }}</td>
                <td>{{ $a->no_registrasi }}</td>
                <td>{{ $a->no_ktp }}</td>
                <td>{{ $a->nama_lengkap }}</td>
                <td>{{ $a->jabatan_pkk }}</td>
                <td>{{ $a->jk }}</td>
                <td>{{ $a->tempat_lahir }}</td>
                <td>{{ $a->tgl_lahir }}</td>
                <td>{{ $a->status_perkawinan }}</td>
                <td>{{ $a->status_dalam_keluarga }}</td>
                <td>{{ $a->agama }}</td>
                <td>{{ $a->alamat }}</td>
                <td>{{ $a->pendidikan }}</td>
                <td>{{ $a->pekerjaan }}</td>
                <td>{{ $a->akseptor_kb }}</td>
                <td>{{ $a->posyandu }}</td>
                <td>{{ $a->program_bina_keluarga_balita }}</td>
                <td>{{ $a->tabungan }}</td>
                <td>{{ $a->kelompok_belajar }}</td>
                <td>{{ $a->paud }}</td>
                <td>{{ $a->koperasi }}</td>
                <td>{{ $a->keterangan }}</td>
            </tr>
        @endforeach
    </tbody>
</table>