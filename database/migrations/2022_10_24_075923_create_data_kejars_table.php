<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataKejarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_kejars', function (Blueprint $table) {
            $table->increments('id_data_kejar');
            $table->integer('id_data_kelompok_belajar');
            $table->integer('id_kelompok_belajar');
            $table->integer('jumlah_siswa_laki_laki');
            $table->integer('jumlah_siswa_perempuan');
            $table->integer('jumlah_pengajar_laki_laki');
            $table->integer('jumlah_pengajar_perempuan');
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
        Schema::dropIfExists('data_kejars');
    }
}
