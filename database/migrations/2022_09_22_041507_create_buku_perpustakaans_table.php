<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBukuperpustakaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buku_perpustakaans', function (Blueprint $table) {
            $table->id();
            $table->integer('id_perpustakaan');
            $table->string('nama_perpus');
            $table->integer('id_buku');
            $table->string('judul_buku');
            $table->string('pengarang');
            $table->integer('tahun');
            $table->integer('jumlah');
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
        Schema::dropIfExists('bukuperpustakaan');
    }
}
