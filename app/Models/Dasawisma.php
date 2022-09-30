<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dasawisma extends Model
{
    use HasFactory;

    protected $fillable = [
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
