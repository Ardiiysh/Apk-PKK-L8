<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRekapitulasiKelompokPkkRtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekapitulasi_kelompok_pkk_rts', function (Blueprint $table) {
            $table->increments('id_rekapitulasi_kelompok_pkk_rt');
            $table->integer('rt');
            $table->integer('rw');
            $table->string('kelurahan');
            $table->integer('tahun');
            $table->text('keterangan');
            $table->integer('is_user_id');
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
        Schema::dropIfExists('rekapitulasi_kelompok_pkk_rts');
    }
}
