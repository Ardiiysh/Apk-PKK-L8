<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatatanDiesnatalis extends Model
{
    use HasFactory;
    protected $fillable = [
        'is_user_id', 
        // 'id_dasawisma',
        'rt',
        'rw',
        'kelurahan',
        'kecamatan',
        'kabupaten_kota',
        'provinsi',
        'bulan',
        'tahun',
        'nama_ibu',
        'nama_suami',
        'nama_anak',
        'status',
        'jenkel',
        'tanggal',
        'akta',
        'sebab',
        'keterangan',
    ];
}
