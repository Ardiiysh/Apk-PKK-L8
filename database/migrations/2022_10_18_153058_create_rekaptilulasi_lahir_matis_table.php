<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRekaptilulasiLahirMatisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekaptilulasi_lahir_matis', function (Blueprint $table) {
            $table->increments('id_rekapitulasi_lahir_mati');
            $table->integer('id_rekapitulasi_kelahiran_kematian');
            $table->integer('id_catatan_diesnatalis');
            $table->integer('id_dasawisma');
            $table->string('bulan');
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
        Schema::dropIfExists('rekaptilulasi_lahir_matis');
    }
}
