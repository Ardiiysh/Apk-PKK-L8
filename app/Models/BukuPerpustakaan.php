<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BukuPerpustakaan extends Model
{
    use HasFactory;

    protected $fillable = [
        'is_user_id', 
        'id_perpustakaan', 'nama_perpus','id_buku', 'judul_buku', 'pengarang','tahun', 'jumlah',
    ];
}
