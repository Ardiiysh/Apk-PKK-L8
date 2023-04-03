<?php

namespace Database\Seeders;
use App\Models\Desa;
use Illuminate\Database\Seeder;

class DesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $desa = [
            [
                'nama_desa'=>'Desa Wikrama Garut',
                'alamat_desa'=>'Pasawahan, Tarogong Kaler, Garut',
            ],
            [
                'nama_desa'=>'Desa Wikrama Bogor',
                'alamat_desa'=>'Tajur, Bogor Selatan, Bogor',
            ]
        ];

        foreach ($desa as $key => $value) {
            Desa::create($value);
        }
    }
}