<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataHatinyaPkksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_hatinya_pkks', function (Blueprint $table) {
            $table->increments('id_data_hatinya_pkk');
            $table->integer('id_data_hatinya');
            $table->integer('id_hatinya_pkk');
            $table->integer('jumlah');
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
        Schema::dropIfExists('data_hatinya_pkks');
    }
}
