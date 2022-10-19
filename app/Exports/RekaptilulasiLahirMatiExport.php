<?php

namespace App\Exports;

use App\Models\RekaptilulasiLahirMati;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class RekaptilulasiLahirMatiExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return RekaptilulasiLahirMati::all();
    }
    public function headings(): array
    {
        return[ 
             'ID Rekapitulasi Lahir Mati',
             'ID Kekapitulasi Kelahiran Kematian',
             'ID Catatan Diesnatalis',
             'ID Dasawisma',
             'Bulan',
             'Tahun',
             'Keterangan', "Created_at","Updated_at"];
    }
}
