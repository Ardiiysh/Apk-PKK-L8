<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatatanKeluargasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catatan_keluargas', function (Blueprint $table) {
            $table->increments('id_catatan_keluarga');
            $table->string('kepala_rumah_tangga');
            $table->integer('id_dasawisma');
            $table->integer('tahun');
            $table->string('kriteria_rumah');
            $table->string('jamban');
            $table->integer('jumlah_jamban');
            $table->string('sumber_air');
            $table->string('tempat_sampah');
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
        Schema::dropIfExists('catatan_keluargas');
    }
}
