<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataAset extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_data_aset';
    protected $fillable = [
        'id_dasawisma',
        'rt',
        'rw',
        'kelurahan',
        'kecamatan',
        'kabupaten_kota',
        'provinsi',
        'nama_warung_pkk',
        'pengelola',
        'keterangan',
    ];
}
