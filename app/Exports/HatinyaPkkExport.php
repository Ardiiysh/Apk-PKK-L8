<?php

namespace App\Exports;

use App\Models\HatinyaPkk;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithDrawings;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;

class HatinyaPkkExport implements FromCollection,WithHeadings, WithDrawings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return HatinyaPkk::all();
    }
    public function headings(): array
    {
        return [
            'ID Aset Desa',
            'Kategori',
            'Komoditi',
            'Keterangan',
            'Created_at',
            'Updated_at'
        ];
    }

    public function drawings()
    {
        $drawing = new Drawing();
        $drawing->setName('kop surat');
        $drawing->setDescription('ini kop surat');
        $drawing->setPath(public_path('/img/kopsurat.png'));
        $drawing->setHeight(90);
        $drawing->setCoordinates('B5');

        return $drawing;
    }

}
