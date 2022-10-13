<?php

namespace App\Exports;

use App\Models\Koperasi;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class KoperasiExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Koperasi::all();
    }
    public function headings(): array
    {
        return[ 'ID Koperasi',
            'Nama Koperasi',
            'Jenis Koperasi',
            'Status Hukum',
            'Anggota Laki Laki',
            'Anggota perempuan',
        'Keterangan' ,"Created_at","Updated_at"];
    }
}
