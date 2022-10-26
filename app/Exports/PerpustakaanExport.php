<?php

namespace App\Exports;

use App\Models\Perpustakaan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PerpustakaanExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Perpustakaan::all();
    }
    public function headings(): array
    {
        return["ID",  
        'RT' ,
        'RW' ,
        'Kelurahan' ,
        'Kecamatan' ,
        'Kabupaten kota' ,
        'Provinsi' ,
        'Nama Perpustakaan' ,
        'Pengelola' ,
        'Jumlah Buku' ,
        'Keterangan' ,"Created_at","Updated_at"];
    }
}
