<?php

namespace App\Exports;

use App\Models\KegiatanWarga;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class KegiatanWargaExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return KegiatanWarga::all();
    }
    public function headings(): array
    {
        return[ "ID Kegiatan Warga",'ID Warga',
        'p4',
        'kerjabakti',
        'Rukun Kematian',
        'Keagamaan',
        'Jimpitan',
        'Arisan',
        'Lainnya',
        'Keterangan',"Created_at","Updated_at"];
    }
}
