<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekapitulasiKelahiranKematian extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_rekapitulasi_kelahiran_kematian';
    protected $fillable = [
        'id_dasawisma' ,
        'rt' ,
        'rw' ,
        'kelurahan' ,
        'kecamatan' ,
        'kabupaten_kota' ,
        'provinsi' ,
        'keterangan' ,
    ];
}
