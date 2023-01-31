<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
  
    protected $fillable = [
        'is_user_id', 
        'nama_buku', 'tahun', 'penulis','keterangan'
    ];
}
