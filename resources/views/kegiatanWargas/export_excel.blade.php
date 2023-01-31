<table>
    <thead>
        <tr>
            <th colspan="9" rowspan="2"></th>
        </tr>
        <tr>
            <th></th>
        </tr>
        <tr>
            <th><strong>ID Warga</strong></th>
            <th><strong>P4</strong></th>
            <th><strong>Kerja Bakti</strong></th>
            <th><strong>Rukun Kematian</strong></th>
            <th><strong>Keagamaan</strong></th>
            <th><strong>Jimpitan</strong></th>
            <th><strong>Arisan</strong></th>
            <th><strong>Lainnya</strong></th>
            <th><strong>Keterangan</strong></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($kegiatanwargas as $a)
            <tr>
                <td>{{ $a->id_warga }}</td>
                <td>{{ $a->p4 }}</td>
                <td>{{ $a->kerjabakti }}</td>
                <td>{{ $a->rukun_kematian }}</td>
                <td>{{ $a->keagamaan }}</td>
                <td>{{ $a->jimpitan }}</td>
                <td>{{ $a->arisan }}</td>
                <td>{{ $a->lainnya }}</td>
                <td>{{ $a->keterangan }}</td>
            </tr>
        @endforeach
    </tbody>
</table>