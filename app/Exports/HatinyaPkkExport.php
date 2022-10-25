<?php

namespace App\Exports;

use App\Models\HatinyaPkk;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class HatinyaPkkExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return HatinyaPkk::all();
    }
    public function headings(): array
    {
        return [
            'ID Aset Desa',
            'Kategori',
            'Komoditi',
            'Keterangan',
            'Created_at',
            'Updated_at'
        ];
    }
}
