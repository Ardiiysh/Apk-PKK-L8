<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKejar extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_data_kejar';
    protected $fillable = [
      'is_user_id', 
      'id_data_kelompok_belajar',
      'id_kelompok_belajar',
      'jumlah_siswa_laki_laki',
      'jumlah_siswa_perempuan',
      'jumlah_pengajar_laki_laki',
      'jumlah_pengajar_perempuan',
    ];
}
