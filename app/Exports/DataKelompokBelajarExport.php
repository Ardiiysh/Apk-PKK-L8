<?php

namespace App\Exports;

use App\Models\DataKelompokBelajar;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DataKelompokBelajarExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DataKelompokBelajar::all();
    }
    public function headings(): array
    {
        return[ "ID Data Kejar",
        'ID dasawisma',
        'RW',
        'RT',
        'Kelurahan',
        'Kecamatan',
        'Kabupaten/kota',
        'Provinsi',
        'ID Warga',
        'Tanggal Masuk',
        'Kedudukan',
        'Keterangan',
        "Created_at","Updated_at"];
    }
}
