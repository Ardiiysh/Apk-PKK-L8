<?php

namespace App\Exports;

use App\Models\Buku;

// generarte excel from view
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

// for input image
use Maatwebsite\Excel\Concerns\WithDrawings;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;

class BukuExport implements FromView, WithDrawings
{
    // /**
    // * @return \Illuminate\Support\Collection
    // */
    // public function collection()
    // {
    //     return Buku::all();
    // }

    // public function headings(): array
    // {
    //     return [
    //         "ID",
    //         "Nama Buku",
    //         "Tahun",
    //         "Penulis",
    //         "Keterangan",
    //         "Created_at",
    //         "Updated_at"
    //     ];
    // }
    public function view() :View
    {
        $data['book'] = Buku::all();

        return view('bukus.export_excel', $data);
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
