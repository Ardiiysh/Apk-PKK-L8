<?php

namespace App\Exports;

use App\Models\AsetDesa;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class AsetDesaExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return AsetDesa::all();
    }
    
    public function headings(): array
    {
        return["ID Aset Desa",        
        'kategori',
        'komoditi',
        'keterangan',
        "Created_at",
        "Updated_at"];
    }
}
