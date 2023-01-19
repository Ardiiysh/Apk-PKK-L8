<table>
    <thead>
        <tr>
            <th colspan="8" rowspan="2"></th>
        </tr>
        <tr>
            <th></th>
        </tr>
        <tr>
            <th><strong>Nama Dasawisma</strong></th>
            <th><strong>RT</strong></th>
            <th><strong>RW</strong></th>
            <th><strong>Kelurahan</strong></th>
            <th><strong>Kecamatan</strong></th>
            <th><strong>Kabupaten/Kota</strong></th>
            <th><strong>Provinsi</strong></th>
            <th><strong>Keterangan</strong></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($dasawisma as $a)
            <tr>
                <td>{{ $a->nama_dasawisma }}</td>
                <td>{{ $a->rt }}</td>
                <td>{{ $a->rw }}</td>
                <td>{{ $a->kelurahan }}</td>
                <td>{{ $a->kecamatan }}</td>
                <td>{{ $a->kabupaten_kota }}</td>
                <td>{{ $a->provinsi }}</td>
                <td>{{ $a->keterangan }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
{{-- 'nama_dasawisma' ,
        'rt' ,
        'rw' ,
        'kelurahan' ,
        'kecamatan' ,
        'kabupaten_kota' ,
        'provinsi' ,
        'keterangan' --}}