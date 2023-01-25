<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perpustakaan extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_perpustakaan';
    protected $fillable = [
        'is_user_id', 
        // 'id_dasawisma' ,
        'rt' ,
        'rw' ,
        'kelurahan' ,
        'kecamatan' ,
        'kabupaten_kota' ,
        'provinsi' ,
        'nama_perpustakaan' ,
        'pengelola' ,
        'jumlah_buku' ,
        'keterangan' ,
    ];
}
