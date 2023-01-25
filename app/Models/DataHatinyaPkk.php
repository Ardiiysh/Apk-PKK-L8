<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataHatinyaPkk extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_data_hatinya_pkk';
    protected $fillable = [
        'is_user_id', 
        'id_data_hatinya',
        'id_hatinya_pkk',
        'jumlah',
        'satuan',
    ];
}
