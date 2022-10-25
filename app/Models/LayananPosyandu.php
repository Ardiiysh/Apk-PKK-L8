<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LayananPosyandu extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_layanan_posyandu';
    protected $fillable = [
       'jenis_layanan',
       'keterangan',
    ];
}
