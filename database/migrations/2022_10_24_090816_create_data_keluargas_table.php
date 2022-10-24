<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataKeluargasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_keluargas', function (Blueprint $table) {
            $table->increments('id_data_keluarga');
            $table->integer('id_dasawisma');
            $table->integer('rt');
            $table->integer('rw');
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('kabupaten_kota');
            $table->string('provinsi');
            $table->string('kepala_rumah_tangga');
            $table->integer('jumlah_anggota_keluarga');
            $table->integer('laki_laki');
            $table->integer('wanita');
            $table->integer('jumlah_kepala_keluarga');
            $table->integer('balita');
            $table->integer('pasangan_usia_subur');
            $table->integer('wanita_usia_subur');
            $table->integer('buta');
            $table->integer('ibu_hamil');
            $table->integer('ibu_menyusui');
            $table->integer('lansia');
            $table->string('makanan_pokok');
            $table->integer('jamban');
            $table->integer('sumber_air');
            $table->integer('tempat_pembuangan_sampah');
            $table->integer('saluran_pembuangan_air_limbah');
            $table->integer('stiker_p4k');
            $table->string('kriteria_rumah');
            $table->string('up2k');
            $table->string('kegiatan_usaha_kesehatan_lingkungan');
            $table->text('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_keluargas');
    }
}
