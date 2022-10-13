<?php

namespace App\Exports;

use App\Models\DataIndustriRumahTangga;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DataIndustriRumahTanggaExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DataIndustriRumahTangga::all();
    }
    public function headings(): array
    {
        return[ "ID Industri Rumah Tangga",        
        "ID Data Industri" ,
        "ID Industri Rumah Tangga" ,
        "volume" ,
        "satuan" ,
       " keterangan" ,"Created_at","Updated_at"];
    }
}
