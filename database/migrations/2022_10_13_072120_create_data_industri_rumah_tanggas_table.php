<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataIndustriRumahTanggasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_industri_rumah_tanggas', function (Blueprint $table) {
            $table->increments('id_data_industri_rumah_tangga');
            $table->integer('id_data_industri');
            $table->integer('id_industri_rumah_tangga');
            $table->string('volume');
            $table->string('satuan');
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
        Schema::dropIfExists('data_industri_rumah_tanggas');
    }
}
