<?php

namespace App\Exports;

use App\Models\DataKeluarga;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DataKeluargaExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DataKeluarga::all();
    }
    public function headings(): array
    {
        return[     'ID Data Keluarga ',
        'RT',
        'RW',
        'Kelurahan',
        'Kecamatan',
        'Kabupaten/Kota',
        'Provinsi',
        'Kepala Rumah Tangga',
        'Jumlah Anggota Keluarga',
        'Laki-Laki',
        'Wanita',
        'Jumlah Kepala Keluarga',
        'Balita',
        'Pasangan Usia Subur',
        'Wanita Usia Subur',
        'Buta',
        'Ibu Hamil',
        'Ibu Menyusui',
        'Lansia',
        'Makanan Pokok',
        'Jamban',
        'Sumber Air',
        'Tempat Pembuangan Sampah',
        'Saluran Pembuangan Air Limbah',
        'Stiker p4k',
        'Kriteria Rumah',
        'up2k',
        'Kegiatan Usaha Kesehatan Lingkungan',
        'Keterangan',
        "Created_at","Updated_at"];
    }
}
