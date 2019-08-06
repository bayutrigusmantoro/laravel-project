<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePelayanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelayan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_pelayan');
            $table->string('kode_pelayan');
            $table->string('jk');
            $table->integer('umur');
            $table->string('agama');
            $table->text('alamat');
            $table->integer('tlp');
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
        Schema::dropIfExists('pelayan');
    }
}
