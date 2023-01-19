<?php

namespace App\Exports;

use App\Models\DataAsetDesa;

// generate excel from view
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

// for input image
use Maatwebsite\Excel\Concerns\WithDrawings;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;

class DataAsetDesaExport implements FromView, WithDrawings
{
    // /**
    // * @return \Illuminate\Support\Collection
    // */
    // public function collection()
    // {
    //     return DataAsetDesa::all();
    // }
    // public function headings(): array
    // {
    //     return["ID Aset Desa",        
    //     'ID Data Aset',
    //     'ID Aset Desa',
    //     'volume',
    //     'satuan',
    //     "Created_at",
    //     "Updated_at"];
    // }
    public function view() :View
    {
        $data['dataAsetDesa'] = DataAsetDesa::all();

        return view('dataAsetDesas.export_excel', $data);
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
