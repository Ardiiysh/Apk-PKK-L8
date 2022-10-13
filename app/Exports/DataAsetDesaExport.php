<?php

namespace App\Exports;

use App\Models\DataAsetDesa;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DataAsetDesaExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DataAsetDesa::all();
    }
    public function headings(): array
    {
        return["ID Aset Desa",        
        'ID Data Aset',
        'ID Aset Desa',
        'volume',
        'satuan',
        "Created_at",
        "Updated_at"];
    }
}
