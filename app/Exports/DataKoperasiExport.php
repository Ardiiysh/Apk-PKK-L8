<?php

namespace App\Exports;

use App\Models\DataKoperasi;

// generate excel from view
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

// for input image
use Maatwebsite\Excel\Concerns\WithDrawings;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;

class DataKoperasiExport implements FromView,WithDrawings
{
    // /**
    // * @return \Illuminate\Support\Collection
    // */
    // public function collection()
    // {
    //     return DataKoperasi::all();
    // }
    
    // public function headings(): array
    // {
    //     return [
    //         // 'ID Dasawisma',
    //         'ID Data Koperasi',
    //         'RT',
    //         'RW',
    //         'Kelurahan',
    //         'Kecamatan',
    //         'Kabupaten/Kota',
    //         'Provinsi',
    //         'Keterangan'
    //         ,"Created_at","Updated_at"
    //     ];
    // }
    public function view() :View
    {
        $data['dataKoperasi'] = DataKoperasi::all();

        return view('dataKoperasis.export_excel', $data);
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
