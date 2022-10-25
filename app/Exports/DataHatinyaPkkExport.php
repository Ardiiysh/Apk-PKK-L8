<?php

namespace App\Exports;

use App\Models\DataHatinyaPkk;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DataHatinyaPkkExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DataHatinyaPkk::all();
    }
    public function headings(): array
    {
        return [
            'ID Data Hatinya pkk',
            'ID Data Hatinya',
            'ID Hatinya pkk',
            'jumlah',
            'satuan',
            "Created_at","Updated_at"
        ];
    }
}
