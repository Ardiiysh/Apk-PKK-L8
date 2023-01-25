<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekapitulasiKelompokPkkRt extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_rekapitulasi_kelompok_pkk_rt';
    protected $fillable = [
        'is_user_id', 
           'rt',
           'rw',
          'kelurahan',
           'tahun',
          'keterangan',
    ];
}
