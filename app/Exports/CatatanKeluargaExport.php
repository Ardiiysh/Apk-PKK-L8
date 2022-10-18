<?php

namespace App\Exports;

use App\Models\CatatanKeluarga;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CatatanKeluargaExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return CatatanKeluarga::all();
    }
    public function headings(): array
    {
        return[ 'ID Catatan Keluarga','Kepala Rumah tangga' ,
        'ID Dasawisma' ,
        'Tahun' ,
        'Kriteria Rumah' ,
        'Jamban' ,
        'Jumlah Jamban' ,
        'Sumber Air' ,
        'Tempat Sampah' ,
        'Keterangan' , "Created_at","Updated_at"];
    }
}
