<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KegiatanWarga extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_kegiatan_warga';
    protected $fillable = [
        'is_user_id', 
        'id_warga',
        'p4',
        'kerjabakti',
        'rukun_kematian',
        'keagamaan',
        'jimpitan',
        'arisan',
        'lainnya',
        'keterangan',
    ];
}
