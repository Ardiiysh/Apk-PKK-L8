<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsetDesa extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_aset_desa';
    protected $fillable = [
        'is_user_id', 
        'kategori',
        'komoditi',
        'keterangan',
    ];
}
