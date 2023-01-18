<table>
    <thead>
        <tr>
            <th colspan="27" rowspan="2"></th>
        </tr>
        <tr>
            <th></th>
        </tr>
        <tr>
            <th><strong>RT</strong></th>
            <th><strong>RW</strong></th>
            <th><strong>Kelurahan</strong></th>
            <th><strong>Kabupaten Kota</strong></th>
            <th><strong>Provinsi</strong></th>
            <th><strong>Kepala Rumah Tangga</strong></th>
            <th><strong>Laki Laki</strong></th>
            <th><strong>Wanita</strong></th>
            <th><strong>Jumlah Kepala Keluarga</strong></th>
            <th><strong>Jumlah Anggota Keluarga</strong></th>
            <th><strong>Balita</strong></th>
            <th><strong>Pasangan Usia Subur</strong></th>
            <th><strong>Wanita Usia Subur</strong></th>
            <th><strong>Buta</strong></th>
            <th><strong>Ibu Hamil</strong></th>
            <th><strong>Ibu Menyusui</strong></th>
            <th><strong>Lansia</strong></th>
            <th><strong>Makanan Pokok</strong></th>
            <th><strong>Jamban</strong></th>
            <th><strong>Sumber Air</strong></th>
            <th><strong>Tempat Pembuangan Sampah</strong></th>
            <th><strong>Saliran Pembuangan Air Limbah</strong></th>
            <th><strong>Stiker P4k</strong></th>
            <th><strong>Kriteria Rumah</strong></th>
            <th><strong>Up2k</strong></th>
            <th><strong>Kegiatan Usaha Kesehatan Lingkungan</strong></th>
            <th><strong>Keterangan</strong></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($dataKeluarga as $a)
            <tr>
                <td>{{ $a->rt }}</td>
                <td>{{ $a->rw }}</td>
                <td>{{ $a->kelurahan }}</td>
                <td>{{ $a->kabupaten_kota }}</td>
                <td>{{ $a->provinsi }}</td>
                <td>{{ $a->kepala_rumah_tangga }}</td>
                <td>{{ $a->jumlah_anggota_keluarga }}</td>
                <td>{{ $a->laki_laki }}</td>
                <td>{{ $a->wanita }}</td>
                <td>{{ $a->jumlah_kepala_keluarga }}</td>
                <td>{{ $a->balita }}</td>
                <td>{{ $a->pasangan_usia_subur }}</td>
                <td>{{ $a->wanita_usia_subur }}</td>
                <td>{{ $a->buta }}</td>
                <td>{{ $a->ibu_hamil }}</td>
                <td>{{ $a->ibu_menyusui }}</td>
                <td>{{ $a->lansia }}</td>
                <td>{{ $a->makanan_pokok }}</td>
                <td>{{ $a->jamban }}</td>
                <td>{{ $a->sumber_air }}</td>
                <td>{{ $a->tempat_pembuangan_sampah }}</td>
                <td>{{ $a->saluran_pembuangan_air_limbah }}</td>
                <td>{{ $a->stiker_p4k }}</td>
                <td>{{ $a->kriteria_rumah }}</td>
                <td>{{ $a->up2k }}</td>
                <td>{{ $a->kegiatan_usaha_kesehatan_lingkungan }}</td>
                <td>{{ $a->keterangan }}</td>
            </tr>
        @endforeach
    </tbody>
</table>