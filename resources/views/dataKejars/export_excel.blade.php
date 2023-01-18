 <table>
    <thead>
        <tr>
            <th colspan="6" rowspan="2"></th>
        </tr>
        <tr>
            <th></th>
        </tr>
        <tr>
            <th><strong>ID data kelompok belajar</strong></th>
            <th><strong>ID kelompok belajar</strong></th>
            <th><strong>Jumlah siswa laki-laki</strong></th>
            <th><strong>Jumlah siswa perempuan</strong></th>
            <th><strong>Jumlah pengajar laki-laki</strong></th>
            <th><strong>Jumlah pengajar perempuan</strong></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($dataKejar as $a)
            <tr>
                <td>{{ $a->id_data_kelompok_belajar }}</td>
                <td>{{ $a->id_kelompok_belajar }}</td>
                <td>{{ $a->jumlah_siswa_laki_laki }}</td>
                <td>{{ $a->jumlah_siswa_perempuan }}</td>
                <td>{{ $a->jumlah_pengajar_laki_laki }}</td>
                <td>{{ $a->jumlah_pengajar_perempuan }}</td>
            </tr>
        @endforeach
    </tbody>
</table>