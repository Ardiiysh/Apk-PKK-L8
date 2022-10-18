<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRekapitulasiKelahiranKematiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekapitulasi_kelahiran_kematians', function (Blueprint $table) {
            $table->increments('id_rekapitulasi_kelahiran_kematian');
            $table->integer('id_dasawisma');
            $table->integer('rt');
            $table->integer('rw');
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('kabupaten_kota');
            $table->string('provinsi');
            $table->string('keterangan');
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
        Schema::dropIfExists('rekapitulasi_kelahiran_kematians');
    }
}
