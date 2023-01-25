<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekapitulasiKelompokDasawisma extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_rekapitulasi_kelompok_dasawisma';
    protected $fillable = [
        'is_user_id', 
        // 'id_dasawisma',
        'rt',
        'rw',
        'kelurahan',
        'kecamatan',
        'kabupaten_kota',
        'provinsi',
        'tahun',
        'keterangan',
    ];
}
