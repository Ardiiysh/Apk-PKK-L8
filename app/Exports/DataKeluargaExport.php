<?php

namespace App\Exports;

use App\Models\DataKeluarga;

// generate excel from view
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

// for input image
use Maatwebsite\Excel\Concerns\WithDrawings;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;

class DataKeluargaExport implements FromView,WithDrawings
{
    // /**
    // * @return \Illuminate\Support\Collection
    // */
    // public function collection()
    // {
    //     return DataKeluarga::all();
    // }
    // public function headings(): array
    // {
    //     return[     'ID Data Keluarga ',
    //     'RT',
    //     'RW',
    //     'Kelurahan',
    //     'Kecamatan',
    //     'Kabupaten/Kota',
    //     'Provinsi',
    //     'Kepala Rumah Tangga',
    //     'Jumlah Anggota Keluarga',
    //     'Laki-Laki',
    //     'Wanita',
    //     'Jumlah Kepala Keluarga',
    //     'Balita',
    //     'Pasangan Usia Subur',
    //     'Wanita Usia Subur',
    //     'Buta',
    //     'Ibu Hamil',
    //     'Ibu Menyusui',
    //     'Lansia',
    //     'Makanan Pokok',
    //     'Jamban',
    //     'Sumber Air',
    //     'Tempat Pembuangan Sampah',
    //     'Saluran Pembuangan Air Limbah',
    //     'Stiker p4k',
    //     'Kriteria Rumah',
    //     'up2k',
    //     'Kegiatan Usaha Kesehatan Lingkungan',
    //     'Keterangan',
    //     "Created_at","Updated_at"];
    // }
    public function view() :View
    {
        $data['dataKeluarga'] = DataKeluarga::all();

        return view('dataKeluargas.export_excel', $data);
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
