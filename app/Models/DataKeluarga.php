<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKeluarga extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_data_keluarga';
    protected $fillable = [
        // 'id_dasawisma',
        'rt',
        'rw',
        'kelurahan',
        'kecamatan',
        'kabupaten_kota',
        'provinsi',
        'kepala_rumah_tangga',
        'jumlah_anggota_keluarga',
        'laki_laki',
        'wanita',
        'jumlah_kepala_keluarga',
        'balita',
        'pasangan_usia_subur',
        'wanita_usia_subur',
        'buta',
        'ibu_hamil',
        'ibu_menyusui',
        'lansia',
        'makanan_pokok',
        'jamban',
        'sumber_air',
        'tempat_pembuangan_sampah',
        'saluran_pembuangan_air_limbah',
        'stiker_p4k',
        'kriteria_rumah',
        'up2k',
        'kegiatan_usaha_kesehatan_lingkungan',
        'keterangan',
    ];
}
