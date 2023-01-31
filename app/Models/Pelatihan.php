<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelatihan extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_pelatihan';
    protected $fillable = [
        'is_user_id', 
        'nama_pelatihan',
        'kriteria_kader',
        'penyelenggara',
        'keterangan',
    ];
}
