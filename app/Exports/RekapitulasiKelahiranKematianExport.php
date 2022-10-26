<?php

namespace App\Exports;

use App\Models\RekapitulasiKelahiranKematian;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class RekapitulasiKelahiranKematianExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return RekapitulasiKelahiranKematian::all();
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
        'Keterangan' ,"Created_at","Updated_at"];
    }
}
