<?php

namespace App\Exports;

use App\Models\IndustriRumahTangga;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class IndustriRumahTanggaExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return IndustriRumahTangga::all();
    }
    public function headings(): array
    {
        return[ "ID Industri Rumah Tangga",        
        "kategori " ,
       "komoditi ",
       " keterangan" ,"Created_at","Updated_at"];
    }
}
