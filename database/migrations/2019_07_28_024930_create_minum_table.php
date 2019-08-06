<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMinumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('minum', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_minum');
            $table->string('kode_minum');
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
        Schema::dropIfExists('minum');
    }
}
