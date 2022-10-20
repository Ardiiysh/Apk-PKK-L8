<?php

namespace App\Exports;

use App\Models\CatatanKeluargaWarga;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CatatanKeluargaWargaExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return CatatanKeluargaWarga::all();
    }
    public function headings(): array
    {
        return [
            "ID Catatan Keluarga Warga",
            'ID Catatan Keluarga',
            'ID Warga',
            "Created_at",
            "Updated_at"
        ];
    }
}
