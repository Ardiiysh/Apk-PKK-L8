<?php

namespace App\Exports;

use App\Models\LayananPosyandu;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class LayananPosyanduExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return LayananPosyandu::all();
    }
    public function headings(): array
    {
        return["ID", "Jenis Layanan","Keterangan","Created_at","Updated_at"];
    }
}
