<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSidangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sidangs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('nrp');
            $table->string('judul');
            $table->integer('id_mahasiswa')->unsigned();
            $table->integer('id_pembimbing1')->unsigned();
            $table->integer('id_pembimbing2')->unsigned()->nullable();
            $table->boolean('verification_bimbingan')->nullable();
            $table->boolean('verification_sidang')->nullable();;
            $table->timestamps();
            $table->foreign('id_mahasiswa')
                ->references('id')
                ->on('users');
            $table->foreign('id_pembimbing1')
                ->references('id')
                ->on('users');
            $table->foreign('id_pembimbing2')
                ->references('id')
                ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sidangs');
    }
}
