<?php

namespace App\Exports;

use App\Models\DataKoperasi;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DataKoperasiExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DataKoperasi::all();
    }
    
    public function headings(): array
    {
        return [
            // 'ID Dasawisma',
            'ID Data Koperasi',
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
