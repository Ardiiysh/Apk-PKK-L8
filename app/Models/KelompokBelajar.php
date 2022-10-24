<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelompokBelajar extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_kelompok_belajar';
    protected $fillable = [
        'nama_kelompok_belajar',
        'jenis_kelompok_belajar',
        'keterangan',  
    ];
}
