<?php

namespace App\Exports;

use App\Models\RekapitulasiKelompokDasawisma;

// generate excel from view
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

// for input image
use Maatwebsite\Excel\Concerns\WithDrawings;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;

class RekapitulasiKelompokDasawismaExport implements FromView,WithDrawings
{
    // /**
    // * @return \Illuminate\Support\Collection
    // */
    // public function collection()
    // {
    //     return RekapitulasiKelompokDasawisma::all();
    // }
    // public function headings(): array
    // {
    //     return[ 'ID Rekapitulasi Kelompok Dasawisma' ,
    //     'RT' ,
    //     'RW' ,
    //     'Kelurahan' ,
    //     'Kecamatan' ,
    //     'Kabupaten/kota' ,
    //     'Provinsi' ,
    //     'Tahun' ,
    //     'Keterangan' ,"Created_at","Updated_at"];
    // }
    public function view() :View
    {
        $data['rekapitulasiKelompokDasawisma'] = RekapitulasiKelompokDasawisma::all();

        return view('rekapitulasiKelompokDasawismas.export_excel', $data);
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
