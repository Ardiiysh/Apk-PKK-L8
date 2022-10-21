<?php

namespace App\Exports;

use App\Models\Dasawisma;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DasawismaExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Dasawisma::all();
    }

    public function headings(): array
    {
        return [
            'ID',
            'Nama Dasawisma',
            'RT',
            'RW',
            'Kelurahan',
            'Kecamatan',
            'Kabupaten/Kota',
            'Provinsi',
            'Keterangan',
            'Created_at',
            'Updated_at'
        ];
    }
}
