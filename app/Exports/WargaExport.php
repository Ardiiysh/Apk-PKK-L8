<?php

namespace App\Exports;

use App\Models\Warga;

// generate excel from view
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

// for input image
use Maatwebsite\Excel\Concerns\WithDrawings;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;

class WargaExport implements FromView ,WithDrawings
{
    // /**
    // * @return \Illuminate\Support\Collection
    // */
    // public function collection()
    // {
    //     return Warga::all();
    // }
    // public function headings(): array
    // {
    //     return[  'id warga','id dasawisma',
    //     'kepala ruamah tangga',
    //     'no registrasi',
    //     'no ktp',
    //     'nama lengkap',
    //     'jabatan pkk',
    //     'jk',
    //     'tempat lahir',
    //     'tgl lahir',
    //     'status perkawinan',
    //     'status dalam keluarga',
    //     'agama',
    //     'alamat',
    //     'pendidikan',
    //     'pekerjaan',
    //     'akseptor kb',
    //     'posyandu',
    //     'program bina keluarga balita',
    //     'tabungan',
    //     'kelompok belajar',
    //     'paud',
    //     'koperasi',
    //     'keteragnan',"Created at","Updated at"];
    // }
    public function view() :View
    {
        $data['wargas'] = Warga::all();

        return view('wargas.export_excel', $data);
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
