<table>
    <thead>
        <tr>
            <th colspan="6" rowspan="2"></th>
        </tr>
        <tr>
            <th></th>
        </tr>
        <tr>
            <th><strong>ID Rekapitulasi Kelahiran Kematian</strong></th>
            <th><strong>ID Catatan Diesnatalis</strong></th>
            <th><strong>ID Dasawisma</strong></th>
            <th><strong>Bulan</strong></th>
            <th><strong>Tahun</strong></th>
            <th><strong>Keterangan</strong></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($rekaptilulasiLahirMati as $a)
            <tr>
                <td>{{ $a->id_rekapitulasi_kelahiran_kematian }}</td>
                <td>{{ $a->id_catatan_diesnatalis }}</td>
                <td>{{ $a->id_dasawisma }}</td>
                <td>{{ $a->bulan }}</td>
                <td>{{ $a->tahun }}</td>
                <td>{{ $a->keterangan }}</td>
            </tr>
        @endforeach
    </tbody>
</table>