<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWargasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wargas', function (Blueprint $table) {
            $table->increments('id_warga');
            $table->string('id_dasawisma');
            $table->string('kepala_rumah_tangga');
            $table->string('no_registrasi');
            $table->string('no_ktp');
            $table->string('nama_lengkap');
            $table->string('jabatan_pkk');
            $table->string('jk');
            $table->string('tempat_lahir');
            $table->string('tgl_lahir');
            $table->string('status_perkawinan');
            $table->string('status_dalam_keluarga');
            $table->string('agama');
            $table->string('alamat');
            $table->string('pendidikan');
            $table->string('pekerjaan');
            $table->string('akseptor_kb');
            $table->string('posyandu');
            $table->string('program_bina_keluarga_balita');
            $table->string('tabungan');
            $table->string('kelompok_belajar');
            $table->string('paud');
            $table->string('koperasi');
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
        Schema::dropIfExists('wargas');
    }
}
