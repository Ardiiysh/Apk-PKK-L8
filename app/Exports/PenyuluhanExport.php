<?php

namespace App\Exports;

use App\Models\Penyuluhan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PenyuluhanExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Penyuluhan::all();
    }

    public function headings(): array
    {
        return [
            'ID',
            'Nama Kegiatan',
            'Jenis Penyuluhan',
            'Keterangan',
            'Created_at',
            'Updated_at'
        ];
    }
}
