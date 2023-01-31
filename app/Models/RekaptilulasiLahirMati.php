<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekaptilulasiLahirMati extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_rekapitulasi_lahir_mati';
    protected $fillable = [
        'is_user_id', 
        'id_rekapitulasi_kelahiran_kematian',
        'id_catatan_diesnatalis' ,
        'id_dasawisma' ,
        'bulan' ,
        'tahun' ,
        'keterangan' ,
    ];
}
