<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyuluhan extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_penyuluhan';
    protected $fillable = [
        'is_user_id', 
        'nama_kegiatan', 'jenis_penyuluhan','keterangan'
    ];
}
