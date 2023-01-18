<table>
    <thead>
        <tr>
            <th colspan="8" rowspan="2"></th>
        </tr>
        <tr>
            <th></th>
        </tr>
        <tr>
            <th><strong>Kepala Rumah Tangga</strong></th>
            <th><strong>ID Dasawisma</strong></th>
            <th><strong>Tahun</strong></th>
            <th><strong>Kriteria Rumah</strong></th>
            <th><strong>Jamban</strong></th>
            <th><strong>Jumlah Jamban</strong></th>
            <th><strong>Sumber Air</strong></th>
            <th><strong>Tempat Sampah</strong></th>
            <th><strong>Keterangan</strong></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($catatanKeluarga as $a)
            <tr>
                <td>{{ $a->kepala_rumah_tangga }}</td>
                <td>{{ $a->id_dasawisma }}</td>
                <td>{{ $a->tahun }}</td>
                <td>{{ $a->kriteria_rumah }}</td>
                <td>{{ $a->jamban }}</td>
                <td>{{ $a->jumlah_jamban }}</td>
                <td>{{ $a->sumber_air }}</td>
                <td>{{ $a->tempat_sampah }}</td>
                <td>{{ $a->keterangan }}</td>
            </tr>
        @endforeach
    </tbody>
</table>