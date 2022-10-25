<?php

namespace App\Exports;

use App\Models\DataLayananPosyandu;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DataLayananPosyanduExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DataLayananPosyandu::all();
    }
    public function headings(): array
    {
        return['ID Data Layanan Posyandu','ID Data Posyandu',
        'ID Layanan Posyandu',
        'Frekuensi Layanan',
        'Pengunjung Laki-Laki',
        'Pengunjung Perempuan',
        'Paramedis Laki-Laki',
        'Paramedis Perempuan',
        'Keterangan',"Created_at","Updated_at"];
    }
} 