<?php

namespace App\Exports;

use App\Models\DataAset;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DataAsetExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DataAset::all();
    }
    public function headings(): array
    {
        return["ID Data Industri", "ID DasaWisma", "RT", "RW","Kelurahan","Kecamatan","Kabupatan/Kota","Provinsi","Keterangan","nama_warung_pkk","pengelola","Created_at","Updated_at"];
    }
}
