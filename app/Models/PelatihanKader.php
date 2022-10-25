<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PelatihanKader extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_pelatihan_kader';
    protected $fillable = [
         'id_dasawisma',
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
