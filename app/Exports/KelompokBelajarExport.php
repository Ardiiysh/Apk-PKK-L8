<?php

namespace App\Exports;

use App\Models\KelompokBelajar;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class KelompokBelajarExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return KelompokBelajar::all();
    }
    public function headings(): array
    {
        return[ "ID Kelompok Belajar",
        'nama kelompok belajar',
        'jenis kelompok belajar',
        'keterangan',"Created_at","Updated_at"];
    }
}
