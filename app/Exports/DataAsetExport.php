<?php

namespace App\Exports;

use App\Models\DataAset;

// generate excel from view
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

// for input image
use Maatwebsite\Excel\Concerns\WithDrawings;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;

class DataAsetExport implements FromView, WithDrawings
{
    // /**
    // * @return \Illuminate\Support\Collection
    // */
    // public function collection()
    // {
    //     return DataAset::all();
    // }

    // public function headings(): array
    // {
    //     return [
    //         'ID Dasawisma',
    //         'RT',
    //         'RW',
    //         'Kelurahan',
    //         'Kecamatan',
    //         'Kabupaten/Kota',
    //         'Provinsi',
    //         'Nama Warung PKK',
    //         'Pengelola',
    //         'Keterangan',
    //     ];
    // }
    public function view() :View
    {
        $data['dataAset'] = DataAset::all();

        return view('dataAsets.export_excel', $data);
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
