<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMakanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('makan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_makan');
            $table->string('kode_makan');
            $table->string('harga_beli');
            $table->integer('harga_jual');
            $table->string('jumlah');
            $table->string('sisa');
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
        Schema::dropIfExists('makan');
    }
}
