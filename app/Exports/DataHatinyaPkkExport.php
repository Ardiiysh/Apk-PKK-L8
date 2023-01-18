<?php

namespace App\Exports;

use App\Models\DataHatinyaPkk;

// generate excel from view
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

// for input image
use Maatwebsite\Excel\Concerns\WithDrawings;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;

class DataHatinyaPkkExport implements FromView, WithDrawings
{
    // /**
    // * @return \Illuminate\Support\Collection
    // */
    // public function collection()
    // {
    //     return DataHatinyaPkk::all();
    // }
    // public function headings(): array
    // {
    //     return [
    //         'ID Data Hatinya pkk',
    //         'ID Data Hatinya',
    //         'ID Hatinya pkk',
    //         'jumlah',
    //         'satuan',
    //         "Created_at","Updated_at"
    //     ];
    // }
    public function view() :View
    {
        $data['dataHatinyaPkk'] = DataHatinyaPkk::all();

        return view('DataHatinyaPkks.export_excel', $data);
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
