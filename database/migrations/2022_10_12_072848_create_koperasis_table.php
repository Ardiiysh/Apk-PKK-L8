<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKoperasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('koperasis', function (Blueprint $table) {
            $table->increments('id_koperasi');
            $table->string('nama_koperasi');
            $table->string('jenis_koperasi');
            $table->string('status_hukum');
            $table->string('anggota_laki_laki');
            $table->string('anggota_perempuan');
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
        Schema::dropIfExists('koperasis');
    }
}
