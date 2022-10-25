<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataLayananPosyandu extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_data_layanan_posyandu';
    protected $fillable = [
        'id_data_posyandu',
        'id_layanan_posyandu',
        'frekuensi_layanan',
        'pengunjung_laki_laki',
        'pengunjung_perempuan',
        'paramedis_laki_Laki',
        'paramedis_perempuan',
        'keterangan',
    ];
}
