<?php

namespace App\Exports;

use App\Models\CatatanDiesnatalis;

// generarte excel from view
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

// for input image
use Maatwebsite\Excel\Concerns\WithDrawings;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;

class CatatanDiesnatalisExport implements FromView, WithDrawings
{
    // /**
    //  * @return \Illuminate\Support\Collection
    //  */
    // public function collection()
    // {
    //     return CatatanDiesnatalis::all();
    // }

    // public function headings(): array
    // {
    //     return [
    //         'ID',
    //         // 'ID Dasa Wisma',
    //         'RT',
    //         'RW',
    //         'Kelurahan',
    //         'Kecamatan',
    //         'Kabupaten/Kota',
    //         'Provinsi',
    //         'Bulan',
    //         'Tahun',
    //         'Nama Ibu',
    //         'Nama Suami',
    //         'Nama Anak',
    //         'JK',
    //         'Tanggal',
    //         'Akta',
    //         'Sebab',
    //         'Keterangan',
    //         'Created_at',
    //         'Updated_at'
    //     ];
    // }
    public function view() :View
    {
        $data['CD'] = CatatanDiesnatalis::all();

        return view('catatanDiesnataliss.export_excel', $data);
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
