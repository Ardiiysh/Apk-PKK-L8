<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPosyandu extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_data_posyandu';
    protected $fillable = [
        // 'id_dasawisma' ,
        'rt' ,
        'rw' ,
        'kelurahan' ,
        'kecamatan' ,
        'kabupaten_kota' ,
        'provinsi' ,
        'nama_posyandu' ,
        'pengelola' ,
        'sekretaris' ,
        'jenis_posyandu' ,
        'jumlah_kader' ,
        'keterangan' ,
    ];
}
  