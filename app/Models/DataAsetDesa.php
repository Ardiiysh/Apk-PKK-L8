<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataAsetDesa extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_data_aset_desa';
    protected $fillable = [
        'id_data_aset',
        'id_aset_desa',
        'volume',
        'satuan',
    ];
}
