<?php

namespace App\Exports;

use App\Models\DataIndustri;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DataIndustriExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DataIndustri::all();
    }
    public function headings(): array
    {
        return["ID Data Industri", "ID DasaWisma", "RT", "RW","Kelurahan","Kecamatan","Kabupatan/Kota","Provinsi","Keterangan","Created_at","Updated_at"];
    }
}
