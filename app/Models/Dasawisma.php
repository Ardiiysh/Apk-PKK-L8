<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dasawisma extends Model
{
    use HasFactory;

    protected $fillable = [
        'is_user_id', 
        'nama_dasawisma' ,
        'rt' ,
        'rw' ,
        'kelurahan' ,
        'kecamatan' ,
        'kabupaten_kota' ,
        'provinsi' ,
        'keterangan' 
    ];
}
