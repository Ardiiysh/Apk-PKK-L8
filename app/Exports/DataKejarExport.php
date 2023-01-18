<?php

namespace App\Exports;

use App\Models\DataKejar;

// generate excel from view
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

// for input image
use Maatwebsite\Excel\Concerns\WithDrawings;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;

class DataKejarExport implements FromView,WithDrawings
{
    // /**
    // * @return \Illuminate\Support\Collection
    // */
    // public function collection()
    // {
    //     return DataKejar::all();
    // }
    // public function headings(): array
    // {
    //     return[ "ID Data Kejar",
    //     'id data kelompok belajar',
    //     'id kelompok belajar',
    //     'jumlah siswa laki laki',
    //     'jumlah siswa perempuan',
    //     'jumlah pengajar laki laki',
    //     'jumlah pengajar perempuan',"Created_at","Updated_at"];
    // }
    public function view() :View
    {
        $data['dataKejar'] = DataKejar::all();

        return view('dataKejars.export_excel', $data);
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
