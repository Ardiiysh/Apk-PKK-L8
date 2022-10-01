<?php

namespace App\Exports;

use App\Models\Pelatihan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PelatihanExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Pelatihan::all();
    }
    public function headings(): array
    {
        return["ID", "Nama Pelatihan", "Kriteria Kader", "Penyelenggara","Keterangan","Created_at","Updated_at"];
    }
}
