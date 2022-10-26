<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKelompokBelajar extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_data_kelompok_belajar';
    protected $fillable = [
        //  'id_dasawisma',
         'rt',
         'rw',
         'kelurahan',
         'kecamatan',
         'kabupaten_kota',
         'provinsi',
         'id_warga',
         'tanggal_masuk',
         'kedudukan',
         'keterangan',
    ];
}
