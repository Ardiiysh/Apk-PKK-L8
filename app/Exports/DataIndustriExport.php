<?php

namespace App\Exports;

use App\Models\DataIndustri;

// generate excel from view
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

// for input image
use Maatwebsite\Excel\Concerns\WithDrawings;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;

class DataIndustriExport implements FromView,WithDrawings
{
    // /**
    // * @return \Illuminate\Support\Collection
    // */
    // public function collection()
    // {
    //     return DataIndustri::all();
    // }
    // public function headings(): array
    // {
    //     return["ID Data Industri",  "RT", "RW","Kelurahan","Kecamatan","Kabupatan/Kota","Provinsi","Keterangan","Created_at","Updated_at"];
    // }
    public function view() :View
    {
        $data['dataIndustri'] = DataIndustri::all();

        return view('dataIndustris.export_excel', $data);
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
