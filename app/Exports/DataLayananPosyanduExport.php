<?php

namespace App\Exports;

use App\Models\DataLayananPosyandu;

// generate excel from view
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

// for input image
use Maatwebsite\Excel\Concerns\WithDrawings;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;

class DataLayananPosyanduExport implements FromView,WithDrawings
{
    // /**
    // * @return \Illuminate\Support\Collection
    // */
    // public function collection()
    // {
    //     return DataLayananPosyandu::all();
    // }
    // public function headings(): array
    // {
    //     return['ID Data Layanan Posyandu','ID Data Posyandu',
    //     'ID Layanan Posyandu',
    //     'Frekuensi Layanan',
    //     'Pengunjung Laki-Laki',
    //     'Pengunjung Perempuan',
    //     'Paramedis Laki-Laki',
    //     'Paramedis Perempuan',
    //     'Keterangan',"Created_at","Updated_at"];
    // }
    public function view() :View
    {
        $data['dataLayananPosyandu'] = DataLayananPosyandu::all();

        return view('dataLayananPosyandus.export_excel', $data);
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