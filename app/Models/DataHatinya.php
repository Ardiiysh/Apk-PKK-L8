<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataHatinya extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_data_hatinya';
    protected $fillable = [
        'is_user_id', 
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
