<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPenyuluhan extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_data_penyuluhan';
    protected $fillable = [
        // "id_dasawisma",
        "rt",
        "rw",
        "kelurahan",
        "kecamatan",
        "kabupaten_kota",
        "provinsi",
        "keterangan",
    ];
}
