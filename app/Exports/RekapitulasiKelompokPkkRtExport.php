<?php

namespace App\Exports;

use App\Models\RekapitulasiKelompokPkkRt;

// generate excel from view
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

// for input image
use Maatwebsite\Excel\Concerns\WithDrawings;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;

class RekapitulasiKelompokPkkRtExport implements FromView,WithDrawings
{
    // /**
    // * @return \Illuminate\Support\Collection
    // */
    // public function collection()
    // {
    //     return RekapitulasiKelompokPkkRt::all();
    // }
    // public function headings(): array
    // {
    //     return[ 'ID Rekapitulasi Kelompok Pkk Rt' ,
    //     'RT' ,
    //     'RW' ,
    //     'Kelurahan' ,
    //     'Tahun' ,
    //     'Keterangan' ,"Created_at","Updated_at"];
    // }
    public function view() :View
    {
        $data['rekapitulasiKelompokPkkRt'] = RekapitulasiKelompokPkkRt::all();

        return view('rekapitulasiKelompokPkkRts.export_excel', $data);
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
