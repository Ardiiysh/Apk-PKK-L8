<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatatanDiesnatalisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catatan_diesnatalis', function (Blueprint $table) {
            $table->id();
            // $table->integer('id_dasawisma');
            $table->integer('rt');
            $table->integer('rw');
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('kabupaten_kota');
            $table->string('provinsi');
            $table->string('bulan');
            $table->integer('tahun');
            $table->string('nama_ibu');
            $table->string('nama_suami');
            $table->string('nama_anak');
            $table->string('status');
            $table->string('jenkel');
            $table->date('tanggal');
            $table->string('akta');
            $table->string('sebab');
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
        Schema::dropIfExists('catatan_diesnatalis');
    }
}
