<?php

namespace App\Exports;

use App\Models\DataPenyuluhan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DataPenyuluhanExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DataPenyuluhan::all();
    }
    public function headings(): array
    {
        return ["ID Data Penyuluhan",
            'ID Dasawisma',
            'RT',
            'RW',
            'Kelurahan',
            'Kecamatan',
            'Kabupaten/Kota',
            'Provinsi',
            'Keterangan'
            ,"Created_at","Updated_at"
        ];
    }
}
