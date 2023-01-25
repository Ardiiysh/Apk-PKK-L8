<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatatanKeluargaWarga extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_catatan_keluarga_warga';
    protected $fillable = [
        'is_user_id', 
        'id_catatan_keluarga',
        'id_warga',
    ];
}
