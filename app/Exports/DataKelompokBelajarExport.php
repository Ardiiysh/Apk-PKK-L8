<?php

namespace App\Exports;

use App\Models\DataKelompokBelajar;

// generate excel from view
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

// for input image
use Maatwebsite\Excel\Concerns\WithDrawings;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;

class DataKelompokBelajarExport implements FromView,WithDrawings
{
    // /**
    // * @return \Illuminate\Support\Collection
    // */
    // public function collection()
    // {
    //     return DataKelompokBelajar::all();
    // }
    // public function headings(): array
    // {
    //     return[ "ID Data Kejar",
    //     // 'ID dasawisma',
    //     'RW',
    //     'RT',
    //     'Kelurahan',
    //     'Kecamatan',
    //     'Kabupaten/kota',
    //     'Provinsi',
    //     'ID Warga',
    //     'Tanggal Masuk',
    //     'Kedudukan',
    //     'Keterangan',
    //     "Created_at","Updated_at"];
    // }
    
    public function view() :View
    {
        $data['dataKelompokBelajar'] = DataKelompokBelajar::all();

        return view('dataKelompokBelajars.export_excel', $data);
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
