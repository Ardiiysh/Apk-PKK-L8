<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_warga';
    protected $fillable = [
        'is_user_id', 
        'id_dasawisma',
            'kepala_rumah_tangga',
            'no_registrasi',
            'no_ktp',
            'nama_lengkap',
            'jabatan_pkk',
            'jk',
            'tempat_lahir',
            'tgl_lahir',
            'status_perkawinan',
            'status_dalam_keluarga',
            'agama',
            'alamat',
            'pendidikan',
            'pekerjaan',
            'akseptor_kb',
            'posyandu',
            'program_bina_keluarga_balita',
            'tabungan',
            'kelompok_belajar',
            'paud',
            'koperasi',
            'keterangan',
    ];
}
