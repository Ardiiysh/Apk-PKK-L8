<?php

namespace App\Exports;

use App\Models\DataKejar;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DataKejarExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DataKejar::all();
    }
    public function headings(): array
    {
        return[ "ID Data Kejar",
        'id data kelompok belajar',
        'id kelompok belajar',
        'jumlah siswa laki laki',
        'jumlah siswa perempuan',
        'jumlah pengajar laki laki',
        'jumlah pengajar perempuan',"Created_at","Updated_at"];
    }
}
