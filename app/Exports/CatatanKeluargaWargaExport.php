<?php

namespace App\Exports;

use App\Models\CatatanKeluargaWarga;

// generate excel from view
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

// for input image
use Maatwebsite\Excel\Concerns\WithDrawings;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;

class CatatanKeluargaWargaExport implements FromCollection, WithHeadings
{
    // /**
    // * @return \Illuminate\Support\Collection
    // */
    // public function collection()
    // {
    //     return CatatanKeluargaWarga::all();
    // }
    // public function headings(): array
    // {
    //     return [
    //         "ID Catatan Keluarga Warga",
    //         'ID Catatan Keluarga',
    //         'ID Warga',
    //         "Created_at",
    //         "Updated_at"
    //     ];
    // }
    public function view() :View
    {
        $data['catatanKeluargaWarga'] = CatatanKeluargaWarga::all();

        return view('catatanKeluargaWargas.export_excel', $data);
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
