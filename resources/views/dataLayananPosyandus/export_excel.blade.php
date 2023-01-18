<table>
    <thead>
        <tr>
            <th colspan="7" rowspan="2"></th>
        </tr>
        <tr>
            <th></th>
        </tr>
        <tr>
            <th><strong>ID Data Posyandu</strong></th>
            <th><strong>ID Layanan Posyandu</strong></th>
            <th><strong>Frekuensi Layanan</strong></th>
            <th><strong>Pengunjung Laki Laki</strong></th>
            <th><strong>Pengunjung Perempuan</strong></th>
            <th><strong>Paramedis Laki Laki</strong></th>
            <th><strong>Paramedis Perempuan</strong></th>
            <th><strong>Keterangan</strong></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($dataLayananPosyandu as $a)
            <tr>
                <td>{{ $a->id_data_posyandu }}</td>
                <td>{{ $a->id_layanan_posyandu }}</td>
                <td>{{ $a->frekuensi_layanan }}</td>
                <td>{{ $a->pengunjung_laki_laki }}</td>
                <td>{{ $a->pengunjung_perempuan }}</td>
                <td>{{ $a->paramedis_laki_Laki }}</td>
                <td>{{ $a->paramedis_perempuan }}</td>
                <td>{{ $a->keterangan }}</td>
            </tr>
        @endforeach
    </tbody>
</table>