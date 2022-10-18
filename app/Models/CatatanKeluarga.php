<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatatanKeluarga extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_catatan_keluarga';
    protected $fillable = [
           'kepala_rumah_tangga' ,
           'id_dasawisma' ,
           'tahun' ,
           'kriteria_rumah' ,
           'jamban' ,
           'jumlah_jamban' ,
           'sumber_air' ,
           'tempat_sampah' ,
           'keterangan' ,
    ];
}
