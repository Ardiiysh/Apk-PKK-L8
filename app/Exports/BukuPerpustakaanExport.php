<?php

namespace App\Exports;

use App\Models\BukuPerpustakaan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class AsetDesaExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return BukuPerpustakaan::all();
    }

    public function headings(): array
    {
        return["ID Buku Perpustakaan",
        'id_perpustakaan',
        'id_buku',
        'jumlah',
        "Created_at",
        "Updated_at"];
    }
}
