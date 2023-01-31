<?php

namespace App\Exports;

use App\Models\KegiatanWarga;

// generate excel from view
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

// for input image
use Maatwebsite\Excel\Concerns\WithDrawings;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;

class KegiatanWargaExport implements FromView ,WithDrawings
{
    // /**
    // * @return \Illuminate\Support\Collection
    // */
    // public function collection()
    // {
    //     return KegiatanWarga::all();
    // }
    // public function headings(): array
    // {
    //     return[ "ID Kegiatan Warga",'ID Warga',
    //     'p4',
    //     'kerjabakti',
    //     'Rukun Kematian',
    //     'Keagamaan',
    //     'Jimpitan',
    //     'Arisan',
    //     'Lainnya',
    //     'Keterangan',"Created_at","Updated_at"];
    // }
    public function view() :View
    {
        $data['kegiatanwargas'] = KegiatanWarga::all();
        
        return view('kegiatanWargas.export_excel', $data);
    }
    
    public function drawings()
    {
        $drawing = new Drawing();
        $drawing->setName('kopsurat');
        $drawing->setDescription('kop surat pkk');
        $drawing->setPath(public_path('/img/kopsurat.png'));
        $drawing->setHeight(35);
        $drawing->setCoordinates('A1');

        return $drawing;
    }
}
