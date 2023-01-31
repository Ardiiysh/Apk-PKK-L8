<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKegiatanWargasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kegiatan_wargas', function (Blueprint $table) {
            $table->increments('id_kegiatan_warga');
            $table->string('id_warga');
            $table->string('p4');
            $table->string('kerjabakti');
            $table->string('rukun_kematian');
            $table->string('keagamaan');
            $table->string('jimpitan');
            $table->string('arisan');
            $table->string('lainnya');
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
        Schema::dropIfExists('kegiatan_wargas');
    }
}
