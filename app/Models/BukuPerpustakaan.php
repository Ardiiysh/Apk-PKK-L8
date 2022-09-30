<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BukuPerpustakaan extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_buku_perpustakaan', 'id_perpustakaan', 'id_buku', 'jumlah',
    ];
}
