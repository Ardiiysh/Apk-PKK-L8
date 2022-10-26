<?php

namespace App\Exports;

use App\Models\RekapitulasiKelompokDasawisma;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class RekapitulasiKelompokDasawismaExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return RekapitulasiKelompokDasawisma::all();
    }
    public function headings(): array
    {
        return[ 'ID Rekapitulasi Kelompok Dasawisma' ,
        'RT' ,
        'RW' ,
        'Kelurahan' ,
        'Kecamatan' ,
        'Kabupaten/kota' ,
        'Provinsi' ,
        'Tahun' ,
        'Keterangan' ,"Created_at","Updated_at"];
    }
}
