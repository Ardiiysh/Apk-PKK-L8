<?php

namespace App\Exports;

use App\Models\Pelatihan;

// generate excel from view
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

// for input image
use Maatwebsite\Excel\Concerns\WithDrawings;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;

class PelatihanExport implements FromView, WithDrawings
{
    // /**
    // * @return \Illuminate\Support\Collection
    // */
    // public function collection()
    // {
    //     return Pelatihan::all();
    // }
    // public function headings(): array
    // {
    //     return["ID", "Nama Pelatihan", "Kriteria Kader", "Penyelenggara","Keterangan","Created_at","Updated_at"];
    // }
    public function view() :View
    {
        $data['pelatihan'] = Pelatihan::all();

        return view('pelatihans.export_excel', $data);
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
