<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Koperasi extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_koperasi';
    protected $fillable = [ 
        'nama_koperasi',
        'jenis_koperasi',
        'status_hukum',
        'anggota_laki_laki',
        'anggota_perempuan',
        'keterangan',
        
    ];
}
