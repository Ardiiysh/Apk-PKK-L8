<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataLayananPosyandusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_layanan_posyandus', function (Blueprint $table) {
            $table->increments('id_data_layanan_posyandu');
            $table->integer('id_data_posyandu');
            $table->integer('id_layanan_posyandu');
            $table->integer('frekuensi_layanan');
            $table->integer('pengunjung_laki_laki');
            $table->integer('pengunjung_perempuan');
            $table->integer('paramedis_laki_Laki');
            $table->integer('paramedis_perempuan');
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
        Schema::dropIfExists('data_layanan_posyandus');
    }
}
