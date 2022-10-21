<?php

namespace App\Exports;

use App\Models\DataAset;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DataAsetExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return DataAset::all();
    }

    public function headings(): array
    {
        return [
            'ID Dasawisma',
            'RT',
            'RW',
            'Kelurahan',
            'Kecamatan',
            'Kabupaten/Kota',
            'Provinsi',
            'Nama Warung PKK',
            'Pengelola',
            'Keterangan',
        ];
    }
}
