<?php

namespace App\Exports;

use App\Models\CatatanDiesnatalis;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CatatanDiesnatalisExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return CatatanDiesnatalis::all();
    }

    public function headings(): array
    {
        return [
            'ID',
            // 'ID Dasa Wisma',
            'RT',
            'RW',
            'Kelurahan',
            'Kecamatan',
            'Kabupaten/Kota',
            'Provinsi',
            'Bulan',
            'Tahun',
            'Nama Ibu',
            'Nama Suami',
            'Nama Anak',
            'JK',
            'Tanggal',
            'Akta',
            'Sebab',
            'Keterangan',
            'Created_at',
            'Updated_at'
        ];
    }
}
