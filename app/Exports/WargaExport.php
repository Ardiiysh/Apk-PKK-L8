<?php

namespace App\Exports;

use App\Models\Warga;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class WargaExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Warga::all();
    }
    public function headings(): array
    {
        return[  'id warga','id dasawisma',
        'kepala ruamah tangga',
        'no registrasi',
        'no ktp',
        'nama lengkap',
        'jabatan pkk',
        'jk',
        'tempat lahir',
        'tgl lahir',
        'status perkawinan',
        'status dalam keluarga',
        'agama',
        'alamat',
        'pendidikan',
        'pekerjaan',
        'akseptor kb',
        'posyandu',
        'program bina keluarga balita',
        'tabungan',
        'kelompok belajar',
        'paud',
        'koperasi',
        'keteragnan',"Created at","Updated at"];
    }
}
