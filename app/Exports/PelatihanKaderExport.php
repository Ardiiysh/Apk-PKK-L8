<?php

namespace App\Exports;

use App\Models\PelatihanKadert;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PelatihanKaderExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return PelatihanKadert::all();
    }
    public function headings(): array
    {
        return[        
        "ID Pelatihan Kader", 
        'RT',
        'RW',
        'Kelurahan',
        'Kecamatan',
        'Kabupaten/kota',
        'Provinsi',
        'ID Warga',
        'Tanggal Masuk',
        'Kedudukan',
        'Keterangan',"Created_at","Updated_at"];
    }
}
