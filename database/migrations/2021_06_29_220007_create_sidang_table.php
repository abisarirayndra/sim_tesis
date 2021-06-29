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
            $table->unsignedInteger('id_mahasiswa');
            $table->unsignedInteger('id_pembimbing1');
            $table->unsignedInteger('id_pembimbing2')->nullable();;
            $table->string('nama');
            $table->string('nrp');
            $table->string('judul');
            $table->boolean('verification_bimbingan')->nullable();;
            $table->boolean('verification_sidang')->nullable();;
            $table->timestamps();
            $table->foreign('id_mahasiswa')
                ->references('id')
                ->on('roles');
            $table->foreign('id_pembimbing1')
                ->references('id')
                ->on('roles');
            $table->foreign('id_pembimbing2')
                ->references('id')
                ->on('roles');
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
