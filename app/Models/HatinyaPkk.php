<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HatinyaPkk extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_hatinya_pkk';
    protected $fillable = [
        'is_user_id', 
        'kategori',
        'komoditi',
        'keterangan',
    ];
}
