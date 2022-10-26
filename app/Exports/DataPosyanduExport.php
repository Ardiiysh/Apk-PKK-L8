<?php

namespace App\Exports;

use App\Models\DataPosyandu;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DataPosyanduExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DataPosyandu::all();
    }
    public function headings(): array
    {
        return[
            'id data posyandu',
            // 'id dasawisma' ,
            'rt' ,
            'rw' ,
            'kelurahan' ,
            'kecamatan' ,
            'kabupaten kota' ,
            'provinsi' ,
            'nama posyandu' ,
            'pengelola' ,
            'sekretaris' ,
            'jenis posyandu' ,
            'jumlah kader' ,
        'Keterangan',"Created_at","Updated_at"];
    }
}
