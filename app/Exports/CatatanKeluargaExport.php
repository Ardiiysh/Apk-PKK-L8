<?php

namespace App\Exports;

use App\Models\CatatanKeluarga;

// generate excel from view
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

// for input image
use Maatwebsite\Excel\Concerns\WithDrawings;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;

class CatatanKeluargaExport implements FromView, WithDrawings
{
    // /**
    // * @return \Illuminate\Support\Collection
    // */
    // public function collection()
    // {
    //     return CatatanKeluarga::all();
    // }
    // public function headings(): array
    // {
    //     return [
    //         'ID Catatan Keluarga',
    //         'Kepala Rumah tangga',
    //         'ID Dasawisma',
    //         'Tahun',
    //         'Kriteria Rumah',
    //         'Jamban',
    //         'Jumlah Jamban',
    //         'Sumber Air',
    //         'Tempat Sampah',
    //         'Keterangan',
    //         "Created_at",
    //         "Updated_at"
    //     ];
    // }
    public function view() :View
    {
        $data['catatanKeluarga'] = CatatanKeluarga::all();

        return view('catatanKeluargas.export_excel', $data);
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
