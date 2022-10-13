<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataIndustriRumahTangga extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_data_industri_rumah_tangga';
    protected $fillable = [
        'id_data_industri',
        'id_industri_rumah_tangga',
        'volume',
        'satuan',
    ];
}
