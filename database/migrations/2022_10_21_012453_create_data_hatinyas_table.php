<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataHatinyasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_hatinyas', function (Blueprint $table) {
            $table->increments("id_data_hatinya");
            // $table->integer("id_dasawisma");
            $table->integer("rt");
            $table->integer("rw");
            $table->string("kelurahan");
            $table->string("kecamatan");
            $table->string("kabupaten_kota");
            $table->string("provinsi");
            $table->text("keterangan");
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
        Schema::dropIfExists('data_hatinyas');
    }
}
