<?php
namespace App\Exports;

use App\Models\RekaptilulasiLahirMati;

// generate excel from view
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

// for input image
use Maatwebsite\Excel\Concerns\WithDrawings;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;

class RekaptilulasiLahirMatiExport implements FromView,WithDrawings
{
    // /**
    // * @return \Illuminate\Support\Collection
    // */
    // public function collection()
    // {
    //     return RekaptilulasiLahirMati::all();
    // }
    // public function headings(): array
    // {
    //     return[ 
    //          'ID Rekapitulasi Lahir Mati',
    //          'ID Kekapitulasi Kelahiran Kematian',
    //          'ID Catatan Diesnatalis',
    //          'ID Dasawisma',
    //          'Bulan',
    //          'Tahun',
    //          'Keterangan', "Created_at","Updated_at"];
    // }
    
    public function view() :View
    {
        $data['rekaptilulasiLahirMati'] = RekaptilulasiLahirMati::all();

        return view('rekaptilulasiLahirMatis.export_excel', $data);
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
